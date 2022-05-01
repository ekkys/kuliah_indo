<?php

namespace App\Http\Controllers;
namespace App\Service\Midtrans;

use File;
use App\Models\OrderMidtrans;
use App\Models\TemporaryOrder;
use App\Http\Requests\StoreOrderMidtransRequest;
use App\Http\Requests\UpdateOrderMidtransRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\Midtrans\CreateSnapTokenService;

class OrderMidtransController extends Controller
{
    
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.order');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderMidtransRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderMidtransRequest $request)
    {
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

    public function getInvoice()
    {
        //mengembalikan ke halaman pesanan sebelum login
        session_start();
        // return json_encode($_SESSION);
        $data = TemporaryOrder::where('user_id', $_SESSION['tmp_id'])->first();
        $data_order = json_decode($data['order_json'], true);
        $data_order['user_id'] = Auth::user()->id;
        $test = OrderMidtrans::create($data_order);
        // $delete_tmp = TemporaryOrder::where('user_id', $_SESSION['tmp_id'])->delete();
        // session_destroy();

        $order_midtrans = OrderMidtrans::where('user_id', Auth::user()->id )->first();

        $snapToken =$order_midtrans->snap_token;
        if (empty($snapToken)) {
            // Jika snap token masih NULL, buat token snap dan simpan ke database
            
            $midtrans = new CreateSnapTokenService($order_midtrans);
            $snapToken = $midtrans->getSnapToken();
 
            $order->snap_token = $snapToken;
            $order->save();
        }

        return view('user.detail-order',[
            'detailOrder' => $order_midtrans
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderMidtrans  $orderMidtrans
     * @return \Illuminate\Http\Response
     */
    public function show(OrderMidtrans $orderMidtrans)
    {
        $snapToken =$orderMidtrans->snap_token;
        if (empty($snapToken)) {
            // Jika snap token masih NULL, buat token snap dan simpan ke database
 
            $midtrans = new CreateSnapTokenService($order);
            $snapToken = $midtrans->getSnapToken();
 
            $order->snap_token = $snapToken;
            $order->save();
        }
 
        return view('orders.show', compact('order', 'snapToken'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderMidtrans  $orderMidtrans
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderMidtrans $orderMidtrans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderMidtransRequest  $request
     * @param  \App\Models\OrderMidtrans  $orderMidtrans
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderMidtransRequest $request, OrderMidtrans $orderMidtrans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderMidtrans  $orderMidtrans
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderMidtrans $orderMidtrans)
    {
        //
    }
}
