<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\UploadTestimoni;
use App\Models\Setting;

class ProfileController extends Controller
{
    public function index() {
        return view('mainWeb.profile',[
            'karyawans' => Karyawan::orderBy('updated_at', 'DESC')->get(),
            'testimonis' => UploadTestimoni::orderBy('updated_at', 'DESC')->limit(3)->get(),
            'settings' => Setting::orderBy('updated_at', 'DESC')->get()
        ]);
    }
}
