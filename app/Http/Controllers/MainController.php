<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadSlideBanner;

class MainController extends Controller
{
    public function index() {
        return view('mainWeb.home', [
            'slidebanners' => UploadSlideBanner::orderBy('updated_at', 'DESC')->get()
        ]);
    }
}
