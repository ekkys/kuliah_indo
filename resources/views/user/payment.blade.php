@extends('layouts.user.main')
@section('title',' Dashboard')
@section('title-page', 'Payment')

@section('content')
       <div class="col-xl-12">
              <div class="card mb-0">
                     <div class="card-body">
                            {{-- table --}}
                            <div class="table-body">
                                   <table class="table table-striped" id="example3">
                                          <thead>
                                            <tr>
                                              <th scope="col">Order Number</th>
                                              <th scope="col">Course Name</th>
                                              <th scope="col">Purchase Date</th>
                                              <th scope="col">Payment</th>
                                              <th scope="col">Payment Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($payments as $key => $payment)
                                            <?php
                                              $date = date('d F Y', strtotime($payment->purchase_date));
                                              $invDate = date('dmY', strtotime($payment->purchase_date));
                                            ?>
                                            <tr onclick="test({{ $payment->id }})" data-toggle="modal" data-target="#exampleModalCenter" id="modalPayment">
                                              <td>{{ $payment->id }}</td>
                                              <td>{{ $payment->penjadwalan_title }}</td>
                                              <td>{{ $date }}</td>
                                              <td>{{ $payment->amount == '0' ? 'Free' : 'Rp '.number_format($payment->amount) }}</td>
                                              <td>{{ $payment->status }}</td>
                                            </tr>
                                          </tbody>
                                          @endforeach
                                   </table>
                            </div>
                            {{-- end table --}}

                            {{-- modal --}}
                            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-centered modal-lg">
                                     <div class="modal-content">
                                       <div class="modal-header justify-content-center">
                                         <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Payment Detail</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                       </div>
                                       <div class="modal-body overflow-auto p-0">
                                         {{-- content modal --}}

                                          <div class="container-trans text-align-left">
                                            <div class="body-trans">
                                              <div class="main-status">
                                                <p class="main-text font-weight-bold text-dark">Order Number</p>
                                                <div>
                                                  <p class="main-text-desc" id="transactionId"></p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="body-trans">
                                              <div class="main-status">
                                                <p class="main-text font-weight-bold">Invoice Number</p>
                                                <div>
                                                  <a target="__blank" class="main-text-desc" id="invData"></a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="body-trans">
                                              <div class="main-status">
                                                <p class="main-text font-weight-bold">Status Detail</p>
                                              </div>
                                              <div class="main-status mt-2">
                                                <p class="main-text">Purchase Complete</p>
                                                <div>
                                                  <p class="main-text">Aug 12, 2022, 07:15 WIB</p>
                                                </div>
                                              </div>
                                              <div class="main-status mt-2">
                                                <p class="main-text">Purchase Verification</p>
                                                <div>
                                                  <p class="main-text">Aug 12, 2022, 07:10 WIB</p>
                                                </div>
                                              </div>
                                              <div class="main-status mt-2">
                                                <p class="main-text">Purchase Date</p>
                                                <div>
                                                  <p class="main-text" id="purchaseDate"></p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="container-trans text-align-left">
                                            <div class="body-trans">
                                              <div class="main-status mb-2">
                                                <p class="main-text font-weight-bold text-dark">Detail Product</p>
                                              </div>
                                              <section class="product-card">
                                                <div class="product-section">
                                                  <div class="wrapper-product">
                                                    <div class="product-info">
                                                      <img src="" id="penjadwalanPhoto">
                                                      <div>
                                                        <a href="#" class="main-text font-weight-bold text-dark" id="penjadwalanTitle">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="wrapper-price">
                                                    <div class="total-price">
                                                      <p class="price-heading">Total Price</p>
                                                      <h5 class="main-price" id="penjadwalanAmount">Rp 499.000</h5>
                                                    </div>
                                                  </div>
                                                </div>
                                              </section>
                                              <div class="text-right mt-4" id="payWrapper">
                                                <a type="button" class="btn-confirm-form" id="paymentLink">Pay Now</a>
                                              </div>
                                            </div>
                                          </div>

                                         {{-- end content modal --}}
                                       </div>
                                     </div>
                                   </div>
                            </div>
                            {{-- end modal --}}
              </div>
       </div>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
       <script>
          function test(id) {
            let dataTrans = <?= $payments ?>;
            let dataObj = dataTrans.find( e => e.id === id);
            let date = new Date(dataObj.purchase_date);
            // date = date.replaceAll("/", "");

            
            $('#transactionId').text(dataObj.id);
            $('#invData').text("INV/"+(('0'+date.getDate()).slice(-2))+(('0'+(date.getMonth()+1)).slice(-2))+date.getFullYear()+"/"+dataObj.user_id+"/"+dataObj.penjadwalan_id+"/"+dataObj.id);
            $('#invData').attr('href', '{{ url("/invoice") }}/' +dataObj.id);
            $('#purchaseDate').text(dataObj.created_at);
            $('#penjadwalanPhoto').attr('src', '{{ asset("storage/") }}/' +dataObj.penjadwalan_foto);
            $('#penjadwalanTitle').text(dataObj.penjadwalan_title);
            $('#penjadwalanAmount').text(dataObj.amount);

            if(dataObj.status == "PAID") {
              $('#paymentLink').remove();
            } else {
              $('#payWrapper').html('<a type="button" class="btn-confirm-form" id="paymentLink">Pay Now</a>');
              $('#paymentLink').attr('href', '{{ url("/home/payment") }}/' +dataObj.id);
            }
          }
       </script>
@endsection