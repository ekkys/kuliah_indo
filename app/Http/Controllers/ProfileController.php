<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\UploadTestimoni;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('mainWeb.profile',[
            'user' => $user,
            'karyawans' => Karyawan::join('jabatans', 'karyawans.jabatan_id', '=', 'jabatans.id')->select("karyawans.*", "jabatans.name as jabatan_name")->orderBy('updated_at', 'DESC')->get(),
            'testimonis' => UploadTestimoni::orderBy('updated_at', 'DESC')->limit(3)->get(),
            'settings' => Setting::orderBy('updated_at', 'DESC')->get(),
            'pembuka1' => DB::table('mainprofile')->where('mainprofile.id', '=', '1')->first(),
            'pembuka2' => DB::table('mainprofile')->where('mainprofile.id', '=', '2')->first(),
            'pembuka3' => DB::table('mainprofile')->where('mainprofile.id', '=', '3')->first(),
            'tentang1' => DB::table('mainprofile')->where('mainprofile.id', '=', '4')->first(),
            'tentang2' => DB::table('mainprofile')->where('mainprofile.id', '=', '5')->first(),
            'tentang3' => DB::table('mainprofile')->where('mainprofile.id', '=', '6')->first(),
            'judulDivisi' => DB::table('mainprofile')->where('mainprofile.id', '=', '9')->first(),
            'deskripsiDivisi' => DB::table('mainprofile')->where('mainprofile.id', '=', '10')->first(),
            'judulDivisi1' => DB::table('mainprofile')->where('mainprofile.id', '=', '11')->first(),
            'deskripsiDivisi1' => DB::table('mainprofile')->where('mainprofile.id', '=', '12')->first(),
            'judulDivisi2' => DB::table('mainprofile')->where('mainprofile.id', '=', '13')->first(),
            'deskripsiDivisi2' => DB::table('mainprofile')->where('mainprofile.id', '=', '14')->first(),
            'judulDivisi3' => DB::table('mainprofile')->where('mainprofile.id', '=', '15')->first(),
            'deskripsiDivisi3' => DB::table('mainprofile')->where('mainprofile.id', '=', '16')->first(),
        ]);
    }
}
