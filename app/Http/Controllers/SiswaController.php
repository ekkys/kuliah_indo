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
        $user = Auth::user();
        return view('user.course', [
            'user' => $user,
            'penjadwalans' => Penjadwalan::orderBy('updated_at', 'DESC')->get(),
        ]);
    }

    public function payment() {
        $user = Auth::user();
        return view('user.payment', [
            'user' => $user,
            'penjadwalans' => Penjadwalan::orderBy('updated_at', 'DESC')->get(),
        ]);
    }

    public function changePassword() {
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

    public function invoice() {
        $user = Auth::user();
        return view('user.invoice', ['user' => $user]);
    }

    public function certificate($id) {
        $user = Auth::user();
        $penjadwalan = Penjadwalan::where('penjadwalans.id', $id)->first();
        $pdf = PDF::loadview('user.certificate', [
            'user' => $user,
            'penjadwalan' => $penjadwalan,
        ])->setPaper('a4', 'landscape');

        // return $pdf->stream();

        return $pdf->download('certificate.pdf');
    }
}
