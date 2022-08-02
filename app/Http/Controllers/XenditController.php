<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Xendit\Xendit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class XenditController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // static $name  = "";
    // static $db  = "";
    // static $email = "";
    // static $phone = "";

     public function __construct(Request $request)
     {
         $this->request = $request;
         $this->db    = "kuliah_indo";
         $this->input  = $this->request->json()->all();
         $this->name  = "";
         $this->email = "";
         $this->phone = "";
     }

    public function accept_payment() { 
        $input = $this->input;
        $transaction_id = $input["id"];
        $transaction = DB::table('order_midtrans')->where('transaction_id', $transaction_id)->first();

        if(!empty($transaction)) {
            $data = [
                "updated_at" => date('Y-m-d', strtotime($input["updated"])),
                "created_at" => date('Y-m-d', strtotime($input["created"])),
                "purchase_date" => date('Y-m-d', strtotime($input["paid_at"])),
                "amount" =>$input["amount"],
                "status" => $input["status"],
            ];

            DB::table('order_midtrans')->where('transaction_id', $transaction_id)->update($data);
            return $data;
        } else {
            return ;
        }

       
    }

    function send_mail($type, $data) {
        // Type :  3 -> Membership, 4 -> Buy Diamond
        $data["type"] = $type;
        $data["name"] = $this->name;
        $data["paid_at"] = date("d-m-Y H:i:s", strtotime($data["paid_at"]));

        switch ($type) {
            case 3:
                Mail::send('mail', $data, function($message) {
                $message->to($this->email, $this->name)->subject('Buy Membership Report');
                $message->from('info@jobfair.co.id','Info');
                });
                break;

            case 4:
                Mail::send('mail', $data, function($message) {
                $message->to($this->email, $this->name)->subject('Buy Diamond Report');
                $message->from('info@jobfair.co.id','Info');
                });
                break;
        }
       
    }

    function create_invoice($user_id, $course_id, $course_name) {
        $order = DB::table('order_midtrans')->orderBy('id', 'DESC')->first();
        $user = DB::table('users')->where('id', $user_id)->first();
        $course = DB::table('penjadwalans')->where('id', $course_id)->first();
        $order_number = empty($order) ? 1 : (int) $order->id + 1;

        $xendit_key = config('endpoint.xendit_key');
        $setKey = Xendit::setApiKey($xendit_key);
        $timestamp = date('Ymd');
        $params = [
            'external_id' => "INV/$timestamp/$user_id/$course_id/$order_number",
            'payer_email' => $user->email,
            'description' => $course_name,
            'amount' => (int) $course->price
        ];

        $createInvoice = \Xendit\Invoice::create($params);

        $data_order = [
            "id" => $order_number,
            "penjadwalan_id" => $course_id,
            "user_id" => $user_id,
            "transaction_id" => $createInvoice["id"],
            "purchase_date" => $createInvoice["created"],
            "snap_token" => $createInvoice["invoice_url"],
            "status" => $createInvoice["status"],
            "created_at" => date('Y-m-d', strtotime($createInvoice["created"])),
            "amount" => (int) $course->price,
        ];

        $order = DB::table('order_midtrans')->insert($data_order);
        
        return view('mainWeb.payment', ['link' => $createInvoice['invoice_url']]);
     }

    function pay_invoice() {
        $xendit_key     = config('endpoint.xendit_key');
        $pay_invoice    = config('endpoint.pay_invoice');
        $input          = $this->input;
        unset($input["action"]);
        $data_json      = json_encode($input);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $pay_invoice);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
        curl_setopt($ch, CURLOPT_USERPWD, $xendit_key . ':' . '');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $result = curl_exec($ch);
        return ["result" => json_decode($result, true)];
    }
}
