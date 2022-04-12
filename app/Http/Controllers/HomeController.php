<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return view('admin.dashboard');

        }elseif ($user->hasRole('tutor')) {
            return view('user.dashboard');

        }elseif ($user->hasRole('karyawan')) {
            return view('admin.dashboard');

        }else {
            return view('user.dashboard', ['user' => $user]);
        }

        
    }

    public function karyawan(){
        return view('admin.dashboard');
    }
    public function tutor(){
        return view('user.dashboard');
    }
    public function siswa(){
        $user = Auth::user();
        return view('user.dashboard', ['user' => $user]);
    }
}
