@extends('layouts.mainWeb.main')

@section('container')
       <div class="row align-items-center ">
           <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
              <div class="card mb-0 mt-5">
                     <div class="card-body mt-5">
                            
                            <form action="{{ route('') }}" method="post" enctype="multipart/form-data">
                            @csrf 
                                   <div class="form-group">
                                          <label for="order-number">Order Number</label>
                                          <input name="order-number" type="text" class="form-control" required placeholder="Full Name" value="">
                                   </div>
                                   <div class="form-group">
                                          <label for="form-full-name">Full Name</label>
                                   </div>
                                   <div class="form-group">
                                          <label for="form-email">Email</label>
                                          <input type="email" class="form-control" id="form-email" placeholder="Email" value="" readonly>
                                   </div>
                                   <div class="form-group">
                                          <label for="form-phone">Phone</label>
                                          <input name="phone" type="text" class="form-control" id="form-phone" placeholder="Phone" value="">
                                   </div>
                                  
                                   <button  class="btn-confirm-form">Lanjut ke Pembayaran</button>
                            </form>
                     </div>
              </div>
           </div>
       </div>


@endsection