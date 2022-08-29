<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DaftarRiwayatController extends Controller
{
    public function index() 
    {
        if(empty(Auth::user())) {
            return redirect('/login');
        }

        return view('admin.riwayat.index', [
            'histories' => DB::table('order_midtrans')
                        ->join('penjadwalans', 'order_midtrans.penjadwalan_id', '=', 'penjadwalans.id')
                        ->join('users', 'order_midtrans.user_id', '=', 'users.id')
                        ->select('order_midtrans.*', 'penjadwalans.title as penjadwalan_title'
                                                   , 'users.name as user_name'
                                )
                        ->orderBy('id', 'DESC')
                        ->get(),
        ]);
    }
}
