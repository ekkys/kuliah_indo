<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\UploadTestimoni;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('mainWeb.profile',[
            'user' => $user,
            'karyawans' => Karyawan::join('jabatans', 'karyawans.jabatan_id', '=', 'jabatans.id')->select("karyawans.*", "jabatans.name as jabatan_name")->orderBy('updated_at', 'DESC')->get(),
            'testimonis' => UploadTestimoni::orderBy('updated_at', 'DESC')->limit(3)->get(),
            'settings' => Setting::orderBy('updated_at', 'DESC')->get()
        ]);
    }
}
