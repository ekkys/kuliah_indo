<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenUserController extends Controller
{
    public function index() {
        $allUsers = DB::table('users');
    }
}
