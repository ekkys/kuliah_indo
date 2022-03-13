<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // return view('home');
        return view('layouts.main');
    }

    public function karyawan(){
        return "Ini Dashboard Karyawan";
    }
    public function tutor(){
        return "Ini Dashboard Tutor";
    }
    public function siswa(){
        return "Ini Dashboard Siswa";
    }
}
