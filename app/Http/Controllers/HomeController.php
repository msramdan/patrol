<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
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
    public function index()
    {
        // dd(FacadesAuth::user()->address);
        $users = User::where('level_user', 2)->get();
        $reports = Report::leftJoin('users', 'reports.user_id', '=', 'users.id')
            ->select(
                'reports.*',
                'users.name as user_name',
                'users.photo as user_photo',
            )
            ->latest()
            ->simplePaginate(10);
        $data = [
            'users' => $users,
            'reports' => $reports,
        ];

        return view('home', $data);
    }
}
