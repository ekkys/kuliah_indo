<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

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

    public static function test_email() {
        $data = array('name'=>"Chalid Ade Rahman", 'email'=> "chalidade@gmail.com", 'type' => 1);
        Mail::send('mail', $data, function($message) {
            $message->to("chalidade@gmail.com","Chalid Ade Rahman")->subject('You registration in Kuliah-indo');
            $message->from('info@kuliah-indo.id','kuliah-indo.id');
        });   
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
          break;
        }
       
      }

    public function confirmation($id) {
        $user = User::where('id', $id)->update(["status"=>1]);
        return $user;
    }
}
