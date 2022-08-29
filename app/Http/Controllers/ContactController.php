<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index() 
    {
        $user = Auth::user();
        return view('mainWeb.contact',[
            'user' => $user,
            'settings' => Setting::orderBy('updated_at', 'DESC')->first()
        ]);
    }
}
