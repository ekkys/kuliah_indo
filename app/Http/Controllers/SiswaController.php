<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function myProfile() {
        return view('user.profile');
    }

    public function myCourse() {
        return view('user.course');
    }

    public function payment() {
        return view('user.payment');
    }

    public function changePassword() {
        return view('user.password');
    }

    public function invoice() {
        return view('user.invoice');
    }
}
