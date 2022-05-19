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
        $absensi = DB::table('penjadwalans')->orderBy('updated_at', 'DESC')->get();
        $new = [];

        foreach ($absensi as $absensi) {
            $data = DB::table('order_midtrans')->where('penjadwalan_id', $absensi->id)->orderBy('updated_at', 'DESC')->get();
            $absensi->count = count($data);
            array_push($new, $absensi);
        }

        return view('admin.absensi.index',['absensis' => $new]);
    }

    public function detail($id) {
        $new = [];
        $date = date('d-m-Y');

        if(isset($_REQUEST['date'])) {
            $absensi = DB::table('order_midtrans')
                            ->leftJoin("penjadwalans", "penjadwalans.id", "=", "order_midtrans.penjadwalan_id")
                            ->join("users", "users.id", "=", "order_midtrans.user_id")
                            ->leftJoin("absensis", "absensis.penjadwalan_id", "=", "penjadwalans.id")
                            ->select("users.*" , "penjadwalans.id as course_id", "absensis.status as status_hadir", "absensis.tanggal as tanggal_hadir")
                            ->where("order_midtrans.penjadwalan_id", $id)
                            ->get();
            $date = $_REQUEST['date'];
            foreach ($absensi as $absensi) {
                if($absensi->tanggal_hadir == $_REQUEST['date']) {
                    array_push($new, $absensi);
                }
            }
        } else {
            $absensi = DB::table('order_midtrans')
                            ->leftJoin("penjadwalans", "penjadwalans.id", "=", "order_midtrans.penjadwalan_id")
                            ->join("users", "users.id", "=", "order_midtrans.user_id")
                            ->leftJoin("absensis", "absensis.penjadwalan_id", "=", "penjadwalans.id")
                            ->select("users.*" , "penjadwalans.id as course_id", "absensis.status as status_hadir", "absensis.tanggal as tanggal_hadir")
                            ->where("order_midtrans.penjadwalan_id", $id)
                            ->where("absensis.tanggal", $date)
                            ->get();
            foreach ($absensi as $absensi) {
                array_push($new, $absensi);
            }
        }

        $tanggal = DB::table('absensis')->select("tanggal")->where("penjadwalan_id", $id)->groupBy('tanggal')->get();

        return view('admin.absensi.edit',['absensis' => $new, 'tanggal'=> $tanggal, 'date'=>$date, 'course_id'=>$id]);
    }

    public function kehadiran($user_id, $course_id, $status) {
        $check = DB::table("absensis")
                    ->where("user_id", $user_id)
                    ->where("tanggal", date('d-m-Y'))
                    ->where("penjadwalan_id",  $course_id)
                    ->get();

        if(empty(count($check))) {
            $insert = DB::table("absensis")->insert([
                "user_id"=> $user_id,
                "penjadwalan_id" => $course_id,
                "status" => $status,
                "tanggal" => date('d-m-Y')
            ]);
        } else {
            $insert = DB::table("absensis")
                        ->where("user_id", $user_id)
                        ->where("tanggal", date('d-m-Y'))
                        ->where("penjadwalan_id",  $course_id)
                        ->update(["status" => $status]);
        }

        $link = '/absensi/'.$course_id.'/edit';

        return redirect($link);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.absensi.create',[
            'penjadwalans' => Penjadwalan::orderBy('updated_at', 'DESC')->get()
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
