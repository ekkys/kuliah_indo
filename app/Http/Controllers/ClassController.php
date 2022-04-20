<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\UploadTestimoni;
use App\Models\Setting;
use App\Models\Penjadwalan;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    public function index() {
        $user = Auth::user();
        $dataKelas = Penjadwalan::join('tutors', 'tutors.id', '=', 'penjadwalans.tutor_id')
                                ->join('topics', 'topics.id', '=', 'penjadwalans.topic_id')
                                ->join('jabatans', 'jabatans.id', '=', 'penjadwalans.jabatan_id')
                                ->select('penjadwalans.*', 'tutors.name as tutor', 'topics.name as topic', 'jabatans.name as jabatan')
                                ->orderBy('updated_at', 'DESC')
                                ->get();
        return view('mainWeb.class', [
            "title" => "Class",
            "dataKelas" => $dataKelas,
            "user"=>$user,
            "settings" => Setting::orderBy('updated_at', 'DESC')->get()
        ]);
    }

    public function singleClass($id) {
        $user = Auth::user();
        $dataKelas = Penjadwalan::where('penjadwalans.id', $id)
                                ->join('tutors', 'tutors.id', '=', 'penjadwalans.tutor_id')
                                ->join('topics', 'topics.id', '=', 'penjadwalans.topic_id')
                                ->join('jabatans', 'jabatans.id', '=', 'penjadwalans.jabatan_id')
                                ->select('penjadwalans.*', 'tutors.name as tutor', 'topics.name as topic', 'jabatans.name as jabatan')
                                ->first();
        return view('mainWeb.singleClass', [
            "title" => "Single Class",
            "dataKelas" => $dataKelas,
            "user"=>$user,
        ]);
    }
    
}
