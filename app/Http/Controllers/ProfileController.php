<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class ProfileController extends Controller
{
    public function index() {
        return view('mainWeb.profile',[
            'karyawans' => Karyawan::orderBy('updated_at', 'DESC')->get()
        ]);
    }
}
