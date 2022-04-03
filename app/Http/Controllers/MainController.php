<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadSlideBanner;
use App\Models\Setting;

class MainController extends Controller
{
    public function index() {
        return view('mainWeb.home', [
            'slidebanners' => UploadSlideBanner::orderBy('updated_at', 'DESC')->get()
            // 'setting' => Setting::orderBy('updated_at', 'DESC')->get()
        ]);
    }
}
