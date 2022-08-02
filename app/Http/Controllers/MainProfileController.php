<?php

namespace App\Http\Controllers;

use App\Models\MainProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (empty(Auth::user())) {
            return redirect('/login');
        } else {
            return view('admin.profile.index',[
                'pembuka1' => DB::table('mainprofile')->where('mainprofile.id', '=', '1')->first(),
                'pembuka2' => DB::table('mainprofile')->where('mainprofile.id', '=', '2')->first(),
                'pembuka3' => DB::table('mainprofile')->where('mainprofile.id', '=', '3')->first(),
                'tentang1' => DB::table('mainprofile')->where('mainprofile.id', '=', '4')->first(),
                'tentang2' => DB::table('mainprofile')->where('mainprofile.id', '=', '5')->first(),
                'tentang3' => DB::table('mainprofile')->where('mainprofile.id', '=', '6')->first(),
                'judulDivisi' => DB::table('mainprofile')->where('mainprofile.id', '=', '9')->first(),
                'deskripsiDivisi' => DB::table('mainprofile')->where('mainprofile.id', '=', '10')->first(),
                'judulDivisi1' => DB::table('mainprofile')->where('mainprofile.id', '=', '11')->first(),
                'deskripsiDivisi1' => DB::table('mainprofile')->where('mainprofile.id', '=', '12')->first(),
                'judulDivisi2' => DB::table('mainprofile')->where('mainprofile.id', '=', '13')->first(),
                'deskripsiDivisi2' => DB::table('mainprofile')->where('mainprofile.id', '=', '14')->first(),
                'judulDivisi3' => DB::table('mainprofile')->where('mainprofile.id', '=', '15')->first(),
                'deskripsiDivisi3' => DB::table('mainprofile')->where('mainprofile.id', '=', '16')->first(),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainProfile  $mainProfile
     * @return \Illuminate\Http\Response
     */
    public function show(MainProfile $mainProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainProfile  $mainProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(MainProfile $mainProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MainProfile  $mainProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('mainprofile')->where('id', '1')->update(['deskripsi' => $request->input('pembuka1')]);
        DB::table('mainprofile')->where('id', '2')->update(['deskripsi' => $request->input('pembuka2')]);
        DB::table('mainprofile')->where('id', '3')->update(['deskripsi' => $request->input('pembuka3')]);
        DB::table('mainprofile')->where('id', '4')->update(['deskripsi' => $request->input('tentang1')]);
        DB::table('mainprofile')->where('id', '5')->update(['deskripsi' => $request->input('tentang2')]);
        DB::table('mainprofile')->where('id', '6')->update(['deskripsi' => $request->input('tentang3')]);
        DB::table('mainprofile')->where('id', '9')->update(['deskripsi' => $request->input('judulDivisi')]);
        DB::table('mainprofile')->where('id', '10')->update(['deskripsi' => $request->input('deskripsiDivisi')]);
        DB::table('mainprofile')->where('id', '11')->update(['deskripsi' => $request->input('judulDivisi1')]);
        DB::table('mainprofile')->where('id', '12')->update(['deskripsi' => $request->input('deskripsiDivisi1')]);
        DB::table('mainprofile')->where('id', '13')->update(['deskripsi' => $request->input('judulDivisi2')]);
        DB::table('mainprofile')->where('id', '14')->update(['deskripsi' => $request->input('deskripsiDivisi2')]);
        DB::table('mainprofile')->where('id', '15')->update(['deskripsi' => $request->input('judulDivisi3')]);
        DB::table('mainprofile')->where('id', '16')->update(['deskripsi' => $request->input('deskripsiDivisi3')]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainProfile  $mainProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainProfile $mainProfile)
    {
        //
    }
}
