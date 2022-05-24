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

    public function accept_payment($request = "", $db = "") { 
        $database = !empty($db) ? $db : $this->db;
        if(empty($request)) {
            $input = $this->input;
            StoreController::store_history("Callback from Xendit Accept Payment", $input);
            $check   = DB::connection($database)->table("tx_invoice")->where("invoice_id", $input["id"])->update(['invoice_status' => $input["status"], 'invoice_paid_date' => $input["paid_at"]]);
        } else {
            $input = $request;
            $input["id"] = $input["invoice_id"];
            $input["external_id"] = $input["invoice_id"];
            $input["status"] = $input["invoice_status"];
            $input["payer_email"] = $input["invoice_payer_email"];
            $input["description"] = $input["invoice_description"];
            $input["paid_at"] = $input["invoice_paid_date"];
            $check   = DB::connection("jobfair")->table("tx_invoice")->where("invoice_id", $input["id"])->update(['invoice_status' => $input["invoice_status"], 'invoice_paid_date' => $input["invoice_paid_date"]]);
        }
        $hdr_invoice   = (array) DB::connection($database)->table("tx_invoice")->where("invoice_id", $input["id"])->first();
        $input_new = [
                'invoice_id' => $input["id"],
                'invoice_external_id' => $input["external_id"],
                'invoice_status' => $input["status"],
                'invoice_payer_email' => $input["payer_email"],
                'invoice_description' => $input["description"],
                'invoice_paid_date' => $input["paid_at"],
                'invoice_account_type' => $hdr_invoice["invoice_account_type"],
                'invoice_xendit' => json_encode($input)
        ];

        $history = DB::connection($database)->table('tx_invoice_dtl')->insert([$input_new]);
        
        if($hdr_invoice["invoice_account_type"] == 2 ) {
            $check_member = (array) DB::connection($database)
            ->table("tx_company")
            ->leftJoin("tx_diamond", "diamond_user_id", "=", "company_id")
            ->where("company_email", $input_new["invoice_payer_email"])
            ->first();
            if(empty($request)) {
                $this->name = $check_member["company_name"];
            }
            $check_member["user_id"] = $check_member["company_id"];
        } else {
            $check_member = (array) DB::connection($database)
            ->table("tx_user")
            ->leftJoin("tx_diamond", "diamond_user_id", "=", "user_id")
            ->where("user_email", $input_new["invoice_payer_email"])
            ->first();
            if(empty($request)) {
                $this->name = $check_member["user_full_name"];
            }
        }
        if(empty($request)) {
            $this->email = $input_new["invoice_payer_email"];
        }
        if ($input["status"] == "PAID") {
            if($hdr_invoice["invoice_account_type"] == 1 && !empty($check_member["user_friend"])) {
                $setting = (array) DB::connection($database)->table("tx_setting_diamond")->first();
                $setting = json_decode($setting["setting_referral"], true);
                $user_code = $check_member["user_friend"]; //user referral
                $user_get_referral = (array) DB::connection($database)->table("tx_user")->where("user_referral_code", "=", $user_code)->first();
                $user_get_referral_id = $user_get_referral["user_id"];
                $bonus = 0;
            }
            if(strpos($input_new["invoice_description"], "Member") !== false) {
                if($hdr_invoice["invoice_account_type"] == 1 ) {
                    foreach ($setting["Member"] as $value) {
                        if ($value["id"] == $hdr_invoice["invoice_item"]) {
                            $bonus = $value["value"];
                        }
                    }

                    $get_diamond = (array) DB::connection($database)
                                            ->table('tx_diamond')
                                            ->where("diamond_user_id", "=", $user_get_referral_id)
                                            ->where("diamond_type", 1)
                                            ->first();

                    $status = 0;
                    if(!empty($get_diamond["diamond_member_end"]) && strtotime($get_diamond["diamond_member_end"]) >= strtotime(date('Y-m-d'))) {
                        $status = 1;
                    }

                    // Insert into User Get Referral Diamond Detail
                    $input_diamond_detail = [
                        'diamond_user_id' => $user_get_referral_id,
                        'diamond_data' => $bonus,
                        'diamond_type' => 2,
                        'diamond_status' => $status
                    ];
                    $input_diamond_detail = DB::connection($database)->table('tx_diamond_dtl')->insert([$input_diamond_detail]);

                    // Update Diamond for user get referral
                    $get_diamond = (array) DB::connection($database)
                                            ->table('tx_diamond')
                                            ->where("diamond_user_id", "=", $user_get_referral_id)
                                            ->where("diamond_type", 2)
                                            ->first();

                    if($status == 1) {
                        if(empty($get_diamond)) {
                            $update_diamond = [
                                'diamond_data' => $bonus,
                                'diamond_user_id' => $user_get_referral_id,
                                'diamond_member' => 0,
                                'diamond_type' => 2,
                                'diamond_status' => $status
                            ];
                            $update_diamond = DB::connection($database)->table('tx_diamond')->insert([$update_diamond]);
                        } else {
                            $update_diamond = [
                                'diamond_data' => $get_diamond["diamond_data"] + $bonus,
                                'diamond_type' => 2
                            ];
                            $update_diamond = DB::connection($database)
                                                ->table('tx_diamond')
                                                ->where("diamond_user_id", $user_get_referral_id)
                                                ->where("diamond_type", 2)
                                                ->update($update_diamond);
                        }
                    }

                    // input history referral
                    $input_history = [
                        'history_referral_code' => $user_code,
                        'history_referral_product_type' => $hdr_invoice["invoice_description"],
                        'history_referral_product_item' => $hdr_invoice["invoice_item"],
                        'history_referral_user' => $check_member["user_id"],
                        'history_referral_bonus' => $bonus,
                        'history_status' => $status
                    ];
                    $history_referal = DB::connection($database)->table('tx_history_referral')->insert([$input_history]);

                }

                if(empty($request)) {
                    $data = $this->update_membership($input_new, $check_member);
                    $this->send_mail(3, $input);
                } else {
                    $data = XenditController::update_membership($input_new, $check_member, $database);
                }
                return $data;
            } else {
                if($hdr_invoice["invoice_account_type"] == 1 ) {
                    foreach ($setting["Diamonds"] as $value) {
                        if ($value["id"] == $hdr_invoice["invoice_item"]) {
                            $bonus = $value["value"];
                        }
                    }

                    $get_diamond = (array) DB::connection($database)
                                            ->table('tx_diamond')
                                            ->where("diamond_user_id", "=", $user_get_referral_id)
                                            ->where("diamond_type", 1)
                                            ->first();

                    $status = 0;
                    if(!empty($get_diamond["diamond_member_end"]) && strtotime($get_diamond["diamond_member_end"]) >= strtotime(date('Y-m-d'))) {
                        $status = 1;
                    }

                    // Insert into User Get Referral Diamond Detail
                    $input_diamond_detail = [
                        'diamond_user_id' => $user_get_referral_id,
                        'diamond_data' => $bonus,
                        'diamond_type' => 2,
                        'diamond_status' => $status
                    ];
                    $input_diamond_detail = DB::connection($database)->table('tx_diamond_dtl')->insert([$input_diamond_detail]);

                    // Update Diamond for user get referral
                    $get_diamond = (array) DB::connection($database)
                                            ->table('tx_diamond')
                                            ->where("diamond_user_id", "=", $user_get_referral_id)
                                            ->where("diamond_type", 2)
                                            ->first();
                    
                    if($status == 1) {
                        if(empty($get_diamond)) {
                            $update_diamond = [
                                'diamond_data' => $bonus,
                                'diamond_user_id' => $user_get_referral_id,
                                'diamond_member' => 0,
                                'diamond_type' => 2,
                                'diamond_status' => $status
                            ];
                            $update_diamond = DB::connection($database)->table('tx_diamond')->insert([$update_diamond]);
                        } else {
                            $update_diamond = [
                                'diamond_data' => $get_diamond["diamond_data"] + $bonus,
                                'diamond_type' => 2
                            ];
                            $update_diamond = DB::connection($database)
                                                ->table('tx_diamond')
                                                ->where("diamond_user_id", $user_get_referral_id)
                                                ->where("diamond_type", 2)
                                                ->update($update_diamond);
                        }
                    }

                     // input history referral
                     $input_history = [
                        'history_referral_code' => $user_code,
                        'history_referral_product_type' => $hdr_invoice["invoice_description"],
                        'history_referral_product_item' => $hdr_invoice["invoice_item"],
                        'history_referral_user' => $check_member["user_id"],
                        'history_referral_bonus' => $bonus,
                        'history_status' => $status
                    ];
                    $history_referal = DB::connection($database)->table('tx_history_referral')->insert([$input_history]);
                }
                if(empty($request)) {
                    $data =  $this->update_diamond($input_new, $check_member);
                    $this->send_mail(4, $input);
                } else {
                    $data = XenditController::update_diamond($input_new, $check_member, $database);
                }
                return $data;
            }
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

    function create_invoice($input) {
          $xendit_key = config('endpoint.xendit_key');
          $setKey = Xendit::setApiKey($xendit_key);
          $timestamp = date('dmyhis');
          $params = [
            'external_id' => "invoice-$timestamp",
            'payer_email' => $input["payer_email"],
            'description' => $input["description"],
            'amount' => $input["amount"]
          ];
          
          $createInvoice = \Xendit\Invoice::create($params);
          $this->store_history($params, $createInvoice);
          $input_new = [
              'invoice_id' => $createInvoice["id"],
              'invoice_external_id' => $createInvoice["external_id"],
              'invoice_status' => $createInvoice["status"],
              'invoice_payer_email' => $createInvoice["payer_email"],
              'invoice_description' => $createInvoice["description"],
              'invoice_expiry_date' => $createInvoice["expiry_date"],
              'invoice_invoice_url' => $createInvoice["invoice_url"],
              'invoice_xendit' => json_encode($createInvoice),
              'invoice_type' => $input["type"],
              'invoice_item' => $input["item"],
              'invoice_account_type' => isset($input["account"]) ? $input["account"] : 1,
          ];

          $input_new['amount'] = $input["amount"];
          $input_new["invoice_expiry_date"] = date("d-m-Y H:i:s", strtotime($createInvoice["expiry_date"]));
          $this->send_mail(5, $input_new);
          
          return ["result" => $createInvoice];
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
