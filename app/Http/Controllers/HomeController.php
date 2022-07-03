<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(empty(Auth::user())) {
            return redirect('/login');
        }

        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return view('admin.dashboard');
        }elseif ($user->hasRole('tutor')) {
            return view('user.dashboard');
        }elseif ($user->hasRole('karyawan')) {
            return view('admin.dashboard');
        }else {
            $mycourse = DB::table('order_midtrans')
                        ->where('order_midtrans.user_id', '=', $user->id)
                        ->where('order_midtrans.status', '!=', 'PENDING' )
                        ->join('penjadwalans', 'order_midtrans.penjadwalan_id', '=', 'penjadwalans.id')
                        ->select('order_midtrans.*', 'penjadwalans.title as penjadwalan_title'
                                                   , 'penjadwalans.date as penjadwalan_date'
                                                   , 'penjadwalans.timestart as penjadwalan_timestart'
                                                   , 'penjadwalans.timeend as penjadwalan_timeend'
                                                   , 'penjadwalans.link_zoom as penjadwalan_linkzoom'
                                )
                        ->orderBy('id', 'DESC')
                        ->get();

            
            $waiting = 0;
            $inProgress = 0;
            $courseEnd = 0;

            foreach ($mycourse as $mycourse) {
                $date = explode( " - ", $mycourse->penjadwalan_date);
                $startDate = str_replace('/', '-', $date[0]);
                $endDate = str_replace('/', '-', $date[1]);
                $startTime = $mycourse->penjadwalan_timestart;
                $endTime = $mycourse->penjadwalan_timeend;

                $currentTime = (date('H:i', strtotime("+7 hours")));

                if (date('d-m-Y') >= $startDate && date('d-m-Y') <= $endDate) {
                        if ($currentTime >= $startTime && $currentTime <= $endTime) {
                                $inProgress++;
                        } elseif ($currentTime >= $endTime) {
                                if ($currentTime > $endTime && date('d-m-Y') >= $endDate) {
                                    $courseEnd++;
                                } else {
                                    $courseEnd++;
                                }
                        } else {
                            $waiting++;
                        }
                } elseif (date('d-m-Y') > "$endDate") {
                    $courseEnd++;
                } else {
                    $waiting++;
                }
            }
            
            return view('user.dashboard', [
                $courses = DB::table('order_midtrans')
                           ->where('order_midtrans.user_id', '=', $user->id)
                           ->where('order_midtrans.status', '!=', 'PENDING' ),

                $payments = DB::table('order_midtrans')
                            ->where('order_midtrans.user_id', '=', $user->id),

                $payments2 = DB::table('order_midtrans')
                             ->where('order_midtrans.user_id', '=', $user->id),

                'user' => $user,
                'waiting' => $waiting,
                'inProgress' => $inProgress,
                'courseEnd' => $courseEnd,
                'allCourses' => $courses->count(),
                'allPayments' => $payments->count(),
                'paidPayments' => $payments->where('order_midtrans.status', '=', 'PAID')->count(),
                'pendingPayments' => $payments2->where('order_midtrans.status', '=', 'PENDING')->count(),
            ]);
        }
    }

    public function karyawan(){
        return view('admin.dashboard');
    }
    public function tutor(){
        return view('user.dashboard');
    }
    public function siswa(){
        $user = Auth::user();
        return view('user.dashboard', ['user' => $user]);
    }
}
