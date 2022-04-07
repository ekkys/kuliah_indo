<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class ContactController extends Controller
{
    public function index() {
        return view('mainWeb.contact',[
            'settings' => Setting::orderBy('updated_at', 'DESC')->get()
        ]);
    }
}
