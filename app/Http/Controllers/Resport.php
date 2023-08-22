<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\ReportComment;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;
use DataTables;
use Illuminate\Support\Facades\Storage;

class Resport extends Controller
{
    public function index()
    {
        return view('report');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string',
        ], [
            'required' => ':attribute wajib diisi.',
            'string' => ':attribute harus berupa teks.',
            'max' => ':attribute maksimal :max karakter.',
            'date' => ':attribute harus berupa tanggal.',
            'image' => ':attribute harus berupa gambar.',
            'mimes' => ':attribute harus berformat jpeg, png, jpg, atau gif.',
        ]);

        // Menyimpan foto yang diunggah
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();

            // Membuat instance Intervention Image
            $image = Image::make($photo);

            // Resize atau crop gambar sesuai kebutuhan
            $image->fit(800, 600); // Ubah ukuran sesuai preferensi
            $photo->storeAs('public/photos', $photoName);
        }

        // Mengambil informasi tahun, bulan, dan tanggal
        $year = date('Y');
        $month = date('m');
        $day = date('d');

        // Menghitung nomor urut (dapat disesuaikan dengan metode Anda)
        $lastNumber = Report::where('no_laporan', 'like', "LAP-$year$month$day-%")->orderByDesc('id')->first(); // Ambil nomor urut terakhir dari database atau file konfigurasi
        if (empty($lastNumber)) {
            $nextNumber = 1;
        } else {
            $temp = explode("-", $lastNumber->no_laporan);
            $nextNumber = intval($temp[2]) + 1;
        }

        // Membuat nomor laporan dengan format yang diinginkan
        $nomorLaporan = "LAP-$year$month$day-" . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
        Report::create([
            'user_id' => Auth::user()->id,
            'tanggal' => now(),
            'no_laporan' => $nomorLaporan,
            'judul' => $request->judul,
            'phone' => $request->phone,
            'photo' => $photoName, // Menyimpan nama foto
            'deskripsi' => $request->deskripsi,
        ]);
        toast('Laporan berhasil di buat', 'success');
        return redirect()->route('home');
    }

    public function  user()
    {
        return view('userreport.index');
    }

    public function getData(Request $request)
    {
        $query = Report::query();

        // Filter rentang tanggal
        if ($request->has('start_date') && $request->has('end_date')) {
            $start = Carbon::parse($request->input('start_date'))->startOfDay();
            $end = Carbon::parse($request->input('end_date'))->endOfDay();
            $query->whereBetween('tanggal', [$start, $end]);
        }
        $query->where('user_id', Auth::user()->id);
        return DataTables::of($query)
            ->addColumn('link', function ($report) {
                return route('home', ['no_laporan' => $report->no_laporan]);
            })
            ->toJson();
    }

    public function detail(Request $request)
    {
        return response()->json(Report::where('id', $request->id)->where('user_id', Auth::user()->id)->first());
    }

    public function delete(Request $request)
    {
        Report::where('id', $request->id)->where('user_id', Auth::user()->id)->delete();
        Alert::success('Success', 'data berhasil di hapus');
        return back();
    }
    public function edit(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string',
        ], [
            'required' => ':attribute wajib diisi.',
            'string' => ':attribute harus berupa teks.',
            'max' => ':attribute maksimal :max karakter.',
            'date' => ':attribute harus berupa tanggal.',
            'image' => ':attribute harus berupa gambar.',
            'mimes' => ':attribute harus berformat jpeg, png, jpg, atau gif.',
        ]);

        $dataUpdate = [
            'judul' => $request->judul,
            'phone' => $request->phone,
            'deskripsi' => $request->deskripsi,
        ];

        // Menyimpan foto yang diunggah
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();

            // Membuat instance Intervention Image
            $image = Image::make($photo);

            // Resize atau crop gambar sesuai kebutuhan
            $image->fit(800, 600); // Ubah ukuran sesuai preferensi
            $photo->storeAs('public/photos', $photoName);
            $dataUpdate['photo'] = $photoName;

            //hapus poyho sebelumnya
            $oldData = Report::where('id', $request->id)->where('user_id', Auth::user()->id)->first();
            Storage::delete('public/photos/' . $oldData->photo);
        }

        Report::where('id', $request->id)->where('user_id', Auth::user()->id)->update($dataUpdate);
        Alert::success('Success', 'data berhasil di Perbarui');
        return back();
    }
    public function export(Request $request)
    {
        $start = Carbon::parse($request->input('start_date'))->startOfDay();
        $end = Carbon::parse($request->input('end_date'))->endOfDay();

        // DB::table('resport')->select();

        $data = Report::whereBetween('tanggal', [$start, $end])
            ->leftJoin('users', 'reports.user_id', '=', 'users.id')
            ->select(
                'reports.*',
                'users.name as name',
            )
            ->where('reports.user_id', Auth::user()->id)
            ->get();

        $pdf = PDF::loadView('userreport.export', ['data' => $data]);

        return $pdf->download($start . '-' . $end . '.pdf');
    }

    public function comment($id)
    {
        $id = decrypt($id);
        $comments = ReportComment::where('laporan_id', $id)
            ->leftJoin('users', 'report_comments.user_id', '=', 'users.id')
            ->select(
                'report_comments.*',
                'users.name as name',
                'users.photo as photo',
            )
            ->where('report_comments.reff', null)
            ->get();
        $data = [
            'comments' => $comments,
            'id' => $id,
        ];

        return view('comment', $data);
    }
    public function commentSave(Request $request)
    {
        $data = [
            'laporan_id' => $request->report_id,
            'user_id' => Auth::user()->id,
            'tanggal' => now(),
            'deskripsi' => $request->deskripsi,
        ];
        if (!empty($request->reff)) {
            $data['reff'] = $request->reff;
        }
        ReportComment::create($data);
        return back();
    }
}
