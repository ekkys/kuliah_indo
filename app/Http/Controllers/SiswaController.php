<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SiswaController extends Controller
{
    public function myProfile() {
        $user = Auth::user();
        return view('user.profile', ['user' => $user]);
    }

    public function updateProfile(Request $request){
        $test = User::where('id', $request->input('id'))->update([
           'name' => $request->input('full-name')
         ]);
         return redirect('/home/siswa/myprofile');

        $user = Auth::user();
        // return view('user.profile', ['user' => $user]);
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
