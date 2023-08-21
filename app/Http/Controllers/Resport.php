<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

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
        toast('Laporan berhasil di buat','success');
        return redirect()->route('home');
    }
}
