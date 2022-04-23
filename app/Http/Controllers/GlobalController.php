<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderMidtrans;

class GlobalController extends Controller
{
    static $email;
    static $name;

    public static function deleteFile($picture){ 
        if(\Storage::exists($picture)){
            \Storage::delete($picture);
        }
    }

    public function mail_view() {
        return view("mail");
    }

    function  __construct(){
      // Set your Merchant Server Key
      \Midtrans\Config::$serverKey = 'SB-Mid-server-9UHynRdCx--4wTvimrJSSALQ';
      // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
      \Midtrans\Config::$isProduction = false;
      // Set sanitization on (default)
      \Midtrans\Config::$isSanitized = true;
      // Set 3DS transaction for credit card to true
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
      $password = substr(md5(time()), 0, 5);
      $user = User::where('email', $email)->update(["password"=>Hash::make($password)]);
      $user = User::where('email', $email)->first();
      
      $data = [
        "email" => $user["email"],
        "password" => $password,
        "name" => $user["name"],
        "type" => 2,
      ];

      $this->send_mail(2, $data);

      return view('auth.login');
  }

  function order_midtrans(Request $request) {
    $user = Auth::user();
            
    if(empty($user)) {
        session_start();
        $tmp_id = rand(10, 1000);
        $_SESSION['tmp_id'] = $tmp_id;
        $data_order = [
            'user_id' => $tmp_id,
            'penjadwalan_id' => $request->penjadwalan_id,
            'purchase_date' => $request->purchase_date,
            'transaction_id' => \Str::uuid(),
            'amount' => $request->amount,
            'status' => $request->status,
        ];

      $data = [
            'user_id' => $tmp_id,
            'order_json' =>  json_encode($data_order)
      ];

      $test = TemporaryOrder::create($data);

        return view('auth.login',[
            'message' => 'Please login to buy the course'
        ]);
    }

    $data_order = [
        'user_id' => $request->user_id,
        'penjadwalan_id' => $request->penjadwalan_id,
        'purchase_date' => $request->purchase_date,
        'transaction_id' => $request->transaction_id,
        'amount' => $request->amount,
        'status' => $request->status,
    ];
    
    $test = OrderMidtrans::create($data_order);
  
    return view('user.detail-order',[
        'detailOrder' => $test
    ]);
  }
}
