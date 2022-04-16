<?php

namespace App\Http\Controllers;

use App\Models\OrderMidtrans;
use App\Http\Requests\StoreOrderMidtransRequest;
use App\Http\Requests\UpdateOrderMidtransRequest;
use Illuminate\Support\Facades\Auth;

class OrderMidtransController extends Controller
{
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
        $user = Auth::user();
        if (!$user) {
           return view('auth.login',[
               'message' => 'Please login to buy the class'
           ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderMidtransRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderMidtransRequest $request)
    {
        $data_order = [
            'user_id' => $request->user_id,
            'penjadwalan_id' => $request->penjadwalan_id,
            'purchase_date' => $request->purchase_date,
            'number' => $request->number,
            'total_price' => $request->total_price,
            'payment_status' => $request->payment_status,
        ];
        OrderMidtrans::create($data_order);
        return 'ini harusnya ke function show di controller OrderMidtransController';
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderMidtrans  $orderMidtrans
     * @return \Illuminate\Http\Response
     */
    public function show(OrderMidtrans $orderMidtrans, $id)
    {
        $data = OrderMidtrans::where('id', $id)->first();
       
        return view('user.order',[
            'order' => $data
        ]);

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
