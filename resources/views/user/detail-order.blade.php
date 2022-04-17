@extends('layouts.mainWeb.main')

@section('container')
       <div class="row align-items-center ">
           <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
              <div class="card mb-0 mt-5">
                     <div class="card-body mt-5">
                            
                            <form action="" method="post" enctype="multipart/form-data">
                            @csrf 
                                   <div class="form-group">
                                          <label for="order-number">Order Number</label>
                                          <input name="order-number" type="text" class="form-control" required placeholder="Full Name" value="{{ $detailOrder->number }}" readonly>
                                   </div>
                               
                                   <div class="form-group">
                                          <label for="title"></label>
                                          <input type="text" class="form-control" id="title"  value="{{ $detailOrder->penjadwalan_id }}" readonly>
                                   </div>
                                   <div class="form-group">
                                          <label for="price"></label>
                                          <input type="text" class="form-control" id="price"  value="{{ $detailOrder->total_price }}" readonly>
                                   </div>
                                   <div class="form-group">
                                          <label for="payment_status"></label>
                                          <input type="text" class="form-control" id="payment_status"  value="{{ $detailOrder->payment_status }}" readonly>
                                   </div>
                                   <div class="form-group">
                                          <label for="purchase_date"></label>
                                          <input type="text" class="form-control" id="purchase_date"  value="{{ $detailOrder->purchase_date }}" readonly>
                                   </div>
                                   
                                
                                    
                                          @if ($detailOrder->payment_status == 1)
                                          <button  class="add-to-cart-button" id="pay-button"> Bayar Sekarang </button>
                                          @else
                                          <h3>Pembayaran berhasil</h3>
                                          @endif
                                   
                            </form>
                     </div>
              </div>
           </div>
       </div>

       <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
       <script>
           const payButton = document.querySelector('#pay-button');
           payButton.addEventListener('click', function(e) {
               e.preventDefault();
    
               snap.pay('{{ $snapToken }}', {
                   // Optional
                   onSuccess: function(result) {
                       /* You may add your own js here, this is just example */
                       // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                       console.log(result)
                   },
                   // Optional
                   onPending: function(result) {
                       /* You may add your own js here, this is just example */
                       // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                       console.log(result)
                   },
                   // Optional
                   onError: function(result) {
                       /* You may add your own js here, this is just example */
                       // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                       console.log(result)
                   }
               });
           });
       </script>
@endsection