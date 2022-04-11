<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\UploadTestimoni;
use App\Models\Setting;

class ClassController extends Controller
{
    public function index() {
        return view('mainWeb.class', [
            "title" => "Class",
            'settings' => Setting::orderBy('updated_at', 'DESC')->get()
        ]);
    }

    public function singleClass() {
        return view('mainWeb.singleClass', [
            "title" => "Single Class",
            'settings' => Setting::orderBy('updated_at', 'DESC')->get()
        ]);
    }
}
