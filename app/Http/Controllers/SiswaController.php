<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\Penjadwalan;
use App\Rules\MatchOldPassword;
use PDF;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function myProfile() {
        $user = Auth::user();
        if(empty(Auth::user())) {
            return redirect('/login');
        }
        
        return view('user.profile', ['user' => $user]);
    }

    public function deleteFile($picture){ 
        // Cara Hapus File https://www.tutsmake.com/laravel-delete-file-from-public-storage-folder/#:~:text=Laravel%20provides%20many%20easy%20methods%20to%20do%20it,%7B%20if%28Storage%3A%3Aexists%28%27upload%2Favtar.png%27%29%29%7B%20Storage%3A%3Adelete%28%27upload%2Favtar.png%27%29%3B%20%7Delse%7B%20dd%28%27File%20does%20not%20exists.%27%29%3B
        if(\Storage::exists($picture)){
            \Storage::delete($picture);
        }
    }

    public function updateProfile(Request $request){
        $isian = [
            'name' => $request->input('full-name'),
            'phone' => $request->input('phone'),
            'biography' => $request->input('biography'), 
        ];

        if ($request->file('picture')) {
            $dataUser = User::where('id', $request->input('id'))->first();
            $this->deleteFile($dataUser['picture']);
            $upload = $request->file('picture')->store('user-images');
            $isian['picture'] = $upload;
        }

        $test = User::where('id', $request->input('id'))->update($isian);
        return redirect('/home/myprofile')->with('success', 'Profile Change Successfuly');
    }

    public function myCourse() {
        if(empty(Auth::user())) {
            return redirect('/login');
        };

        $user = Auth::user();
        $data = [
            'user' => $user,
            'mycourses' => DB::table('order_midtrans')
                        ->join('penjadwalans', 'order_midtrans.penjadwalan_id', '=', 'penjadwalans.id')
                        ->leftJoin('comment', 'comment.course_id', '=', 'penjadwalans.id')
                        ->where('order_midtrans.user_id', '=', $user->id)
                        ->where('order_midtrans.status', '!=', 'PENDING' )
                        // ->where('comment.user_id', $user->id)
                        ->select('order_midtrans.*', 'penjadwalans.title as penjadwalan_title'
                                                   , 'penjadwalans.date as penjadwalan_date'
                                                   , 'penjadwalans.timestart as penjadwalan_timestart'
                                                   , 'penjadwalans.timeend as penjadwalan_timeend'
                                                   , 'penjadwalans.link_zoom as penjadwalan_linkzoom'
                                                   , 'comment.id as comment_id'
                                                   , 'comment.user_id as comment_user_id'
                                )
                        ->orderBy('id', 'DESC')
                        ->get(),
        ];

        $new_data = [];

        foreach ($data['mycourses'] as $value) {
            if($value->comment_user_id == $user->id || empty($value->comment_user_id)) {
                array_push($new_data, $value);
            }
        }

        $data["mycourses"] = $new_data;
        return view('user.course', $data);
    }

    public function comment($courseId, $userId) {
        if(empty(Auth::user())) {
            return redirect('/login');
        };

        $user = Auth::user();
        return view('user.comment', [
            'user' => $user,
            'data' => DB::table('penjadwalans')
                   ->where('penjadwalans.id', $courseId)
                   ->join('topics', 'penjadwalans.topic_id', '=', 'topics.id')
                   ->join('tutors', 'penjadwalans.tutor_id', '=', 'tutors.id')
                   ->join('jabatans', 'penjadwalans.jabatan_id', '=', 'jabatans.id')
                   ->select('penjadwalans.*', 'topics.name as category'
                                            , 'tutors.name as tutor'
                                            , 'jabatans.name as jabatan'
                                            , 'tutors.foto as tutor_foto'
                   )
                   ->first(),
        ]);
    }

    public function commentPost(Request $request, $courseId, $userId) {
        $user = Auth::user();
        $course = DB::table('penjadwalans')->where('penjadwalans.id', $courseId)->first();
        $data = [
            'course_id' => $course->id,
            'user_id'=> $user->id,
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
        ];

        DB::table('comment')->insert($data);

        return redirect('/home/mycourse')->with('success', 'Comment Successfull Added');
    }

    public function payment() {
        if(empty(Auth::user())) {
            return redirect('/login');
        };

        $user = Auth::user();
        return view('user.payment', [
            'user' => $user,
            'payments' => DB::table('order_midtrans')
                       ->where('order_midtrans.user_id', '=', $user->id)
                       ->join('penjadwalans', 'order_midtrans.penjadwalan_id', '=', 'penjadwalans.id')
                       ->select('order_midtrans.*', 'penjadwalans.title as penjadwalan_title'
                                                  , 'penjadwalans.foto as penjadwalan_foto'
                               )
                       ->orderBy('id', 'DESC')
                       ->get(),
        ]);
    }

    public function paymentCourse($order_id) {
        $user = DB::table('order_midtrans')
                ->where('order_midtrans.id', '=', $order_id)
                ->first();

        return view('mainWeb.payment', ['link' => $user->snap_token]);
    }

    public function changePassword() {
        if(empty(Auth::user())) {
            return redirect('/login');
        };

        $user = Auth::user();
        return view('user.password', ['user' => $user]);
    }

    public function storePassword(Request $request){

        $hashedPassword = Auth::user()->password;
        $newPassword = $request->input('newPassword');
        $currentPassword = $request->input('currentPassword');

        if($newPassword == $currentPassword) {
            if(Hash::check($request->oldPassword, $hashedPassword)) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->newPassword);
                $user->save();
                Auth::logout();
                return redirect()->route('login')->with('success', 'Password is Change Successfuly');
            } else {
                return redirect()->back()->with('error', 'Old Password is Invalid');
            }
        } else {
            return redirect()->back()->with('error', 'Confirm password does not match');
        }
    }

    public function invoice($id) {
        $user = Auth::user();
        $invoice = DB::table('order_midtrans')
                   ->where('order_midtrans.id', $id)
                   ->join('penjadwalans', 'order_midtrans.penjadwalan_id', '=', 'penjadwalans.id')
                   ->select('order_midtrans.*', 'penjadwalans.title as penjadwalan_title'
                                              , 'penjadwalans.foto as penjadwalan_foto')
                   ->first();
        return view('user.invoice', [
            'user' => $user,
            'invoice' => $invoice,
        ]);
    }

    public function certificate($id) {
        $user = Auth::user();
        $penjadwalan = Penjadwalan::where('penjadwalans.id', $id)->first();
        $certificate = DB::table('certificate')->first();

        // return view ('user.certificate', [
        //     'user' => $user,
        //     'penjadwalan' => $penjadwalan,
        // ]);

        $pdf = PDF::loadview('user.certificate', [
                    'user' => $user,
                    'penjadwalan' => $penjadwalan,
                    'certificate' => $certificate,
        ])
                ->setPaper('a4', 'landscape')
                ->setOptions([
                    'defaultFont' => 'sans-serif',
                    'isRemoteEnabled' => true,
                    'isHtml5ParserEnabled' => true,
                ]);

        // return $pdf->stream();

        return $pdf->download('certificate.pdf');
    }
}
