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
      
      return ["result"=> $data, "is_login" => false];
    } else {
      $data_order = [
          'user_id' => $request->user_id,
          'penjadwalan_id' => $request->penjadwalan_id,
          'purchase_date' => $request->purchase_date,
          'amount' => $request->amount,
          'transaction_id' => \Str::uuid(),
          'status' => $request->status,
      ];
      
      $order = OrderMidtrans::create($data_order);
      $payload = [
        'transaction_details' => [
          'order_id' => $order->transaction_id,
          'gross_amount' => (int) $order->amount
        ],

        'customer_details' => [
          'user_id' => $order->user_id
        ],

        'item_details' => [[
          'id' => $order->penjadwalan_id,
          'name' => $order->penjadwalan_id,
          'price' => (int) $order->amount,
          'quantity' => 1
        ]]

      ];

      $snapToken = \Midtrans\Snap::getSnapToken($payload);
      $order->snap_token = $snapToken;
      $order->save();
      
      // return ['result' => $data_order, 'is_login' => true];
      $this->response['snap_token'] = $snapToken;
      $this->response['is_login'] = true;
      return response()->json($this->response);
      // TemporaryOrder::where('id', $_SESSION['user_id'])->delete();
      // session_destroy();
    }

   
    // \DB::transaction(function () {

    //   $payload = [
    //     'transaction_details' => [
    //       'order_id' => $order->transaction_id,
    //       'gross_amount' => $order->amount
    //     ],

    //     'customer_details' => [
    //       'user_id' => $order->user_id
    //     ],

    //     'item_details' =>[
    //       'penjadwalan_id' => $order->penjadwalan_id,
    //       'price' => $order->amount,
    //       'quantity' => 1
    //     ]

    //   ];

    //   $snapToken = \Midtrans\Snap::getSnapToken($payload);
    //   $order->snap_token = $snapToken;
    //   $order->save();
    // });
  
    // return view('user.detail-order',[
    //     'detailOrder' => $order
    // ]);
  }

  public function getInvoice()
    {
        //mengembalikan ke halaman pesanan sebelum login
        session_start();
        // return json_encode($_SESSION);
        $data = TemporaryOrder::where('user_id', $_SESSION['tmp_id'])->first();
        $data_order = json_decode($data['order_json'], true);
        $data_order['user_id'] = Auth::user()->id;
        $class = Penjadwalan::where('title', $data_order['penjadwalan_id'])->first();
        return redirect('/class/singleClass/'.$class['id']);

    }
}
