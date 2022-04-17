<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
}
