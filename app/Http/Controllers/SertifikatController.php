<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use IIlluminate\Support\Facades\Storage;

class SertifikatController extends Controller
{
    public function index()
    {
        if(empty(Auth::user())) {
            return redirect('/login');
        };

        return view('admin.sertifikat.index', [
            'certificate' => DB::table('certificate')->first(),
        ]);
    }

    public function update(Request $request)
    {
        if(empty(Auth::user())) {
            return redirect('/login');
        };

        $extension = $request->file('sertifikatImage')->extension();
        $directory = 'sertifikat/';
        $file = $directory.'certificate.'.$extension;

        $path = $request->file('sertifikatImage')->storeAs('sertifikat', 'certificate.'.$extension);
        $certificateImage = [ 'img' =>$file ];

        DB::table('certificate')->update($certificateImage);
        return view('admin.sertifikat.index', [
            'certificate' => DB::table('certificate')->first(),
        ]);
    }
}
