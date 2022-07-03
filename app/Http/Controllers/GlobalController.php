<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderMidtrans;
use App\Models\TemporaryOrder;
use App\Models\Penjadwalan;
use Illuminate\Support\Facades\Config;


class GlobalController extends Controller
{
    static $email;
    static $name;

    public static function deleteFile($picture){ 
        if(\Storage::exists($picture)){
            \Storage::delete($picture);
        }
    }

    public static function cekLogin() {
      if(empty(Auth::user())) {
        return redirect('/login');
      }
    }

    public function mail_view() {
        return view("mail");
    }

    function  __construct(){
      // Set your Merchant Server Key
      \Midtrans\Config::$serverKey = 'SB-Mid-server-9UHynRdCx--4wTvimrJSSALQ';
      // Config::set('midtrans.serverKey', 'SB-Mid-server-9UHynRdCx--4wTvimrJSSALQ');

      // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
      \Midtrans\Config::$isProduction = false;
      // Config::set('midtrans.isProduction', false);

      // Set sanitization on (default)
      \Midtrans\Config::$isSanitized = true;
      // Config::set('midtrans.isSanitized', true);

      // Set 3DS transaction for credit card to true
      // Config::set('midtrans.is3ds', true);
      \Midtrans\Config::$is3ds = true;
    }

    public static function send_mail($type, $data) {
        switch ($type) {
          case 1:
              self::$email = $data["email"];
              self::$name = $data["name"];
              Mail::send('mail', $data, function($message) {
              $message->to(self::$email, self::$name)->subject('You registration in Kuliah-indo.id');
              $message->from(env('MAIL_USERNAME'),'kuliah-indo.id');
            });
            break;

          case 2:
            self::$email = $data["email"];
            self::$name = $data["name"];
            Mail::send('mail', $data, function($message) {
            $message->to(self::$email, self::$name)->subject('Forgot Password');
            $message->from(env('MAIL_USERNAME'),'kuliah-indo.id');
          });
          break;
        }
       
      }

    public function confirmation($id) {
        $user = User::where('id', $id)->update(["status"=>1]);
        return view('auth.login');
    }

    public function reset_password(Request $request) {
      $email = $request->input('email');
      $password = substr(md5(time()), 0, 8);
      $user = User::where('email', $email)->update(["password"=>Hash::make($password)]);
      $user = User::where('email', $email)->first();
      
      if(!empty($user)){

        $data = [
          "email" => $user["email"],
          "password" => $password,
          "name" => $user["name"],
          "type" => 2,
        ];

        $this->send_mail(2, $data);

        return view('auth.login')->with('success', 'Reset link has sended to your email');

      } else {

        return redirect()->back()->with('error', 'Email is invalid');

      }
  }
}
