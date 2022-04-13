<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadSlideBanner;
use App\Models\Setting;
use App\Models\Penjadwalan;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('mainWeb.home', [
            'slidebanners' => UploadSlideBanner::orderBy('updated_at', 'DESC')->get(),
            'settings' => Setting::orderBy('updated_at', 'DESC')->get(),
            'user' => $user,
            'penjadwalans' => Penjadwalan::orderBy('updated_at', 'DESC')->get(),
        ]);
    }
}
