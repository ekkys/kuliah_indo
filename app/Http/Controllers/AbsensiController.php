<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Penjadwalan;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi = DB::table('order_midtrans')
        ->join( 'users', 'users.id', '=', 'order_midtrans.user_id')
        ->join( 'penjadwalans', 'penjadwalans.id', '=', 'order_midtrans.penjadwalan_id')
        ->select('users.name as user_name', 'penjadwalans.*')
        ->orderBy('updated_at', 'DESC')->get();

        $count_user = count($absensi);

        return view('admin.absensi.index',[
            // 'absensis' => Absensi::orderBy('updated_at','DESC')->get(),
                'absensis' => DB::table('order_midtrans')
                ->join( 'users', 'users.id', '=', 'order_midtrans.user_id')
                ->join( 'penjadwalans', 'penjadwalans.id', '=', 'order_midtrans.penjadwalan_id')
                ->select('users.name as user_name', 'penjadwalans.*')
                ->orderBy('updated_at', 'DESC')->get(),
                'users' => $count_user,

        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //user by course

        // $course_id = $request->input('penjadwalan');
        // $user_course = User::where('id', $course_id);
        // dd($user_course);

        return view('admin.absensi.create',[
            'penjadwalans' => Penjadwalan::orderBy('updated_at', 'DESC')->get(),
            // 'users' => User::orderBy('updated_at', 'DESC')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
    // data bisa di store
        // $date = $request->input('date');
        // $penjadwalan = $request->input('penjadwalan');
        // $keterangan = $request->input('keterangan');
        // $dataAbsensi = array('date' => $date, 'penjadwalan' => $penjadwalan,'keterangan' => $keterangan  );

        // dd($dataAbsensi);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        //
    }

    public function getSiswaByCourse($id)
    {
        return view('admin.absensi.siswa', [
            'users' => DB::table('order_midtrans')->where('penjadwalan_id', $id)
            ->join( 'users', 'users.id', '=', 'order_midtrans.user_id')
            ->select('users.*')
            ->orderBy('updated_at', 'DESC')->get(),
        ]);
    }
}
