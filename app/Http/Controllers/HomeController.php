<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Symfony\Component\VarDumper\Cloner\Data;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $users = User::where('level_user', 2)->get();

        $reportsQuery = Report::leftJoin('users', 'reports.user_id', '=', 'users.id')
            ->select(
                'reports.*',
                'users.name as user_name',
                'users.photo as user_photo'
            )
            ->latest();

        if (!empty($request->start_date) && !empty($request->end_date)) {
            $start = Carbon::parse($request->input('start_date'))->startOfDay();
            $end = Carbon::parse($request->input('end_date'))->endOfDay();
            $reportsQuery->whereBetween('reports.tanggal', [$start, $end]);
        }

        if (!empty($request->no_laporan)) {
            $reportsQuery->where('reports.no_laporan', $request->no_laporan);
        }

        $perPage = 10; // Ganti dengan jumlah yang sesuai
        $reports = $reportsQuery->simplePaginate($perPage);

        $data = [
            'users' => $users,
            'reports' => $reports,
            'title' => 'Home',
            'no_laporans' => Report::select('no_laporan')->get(),
        ];

        return view('home', $data);
    }
}
