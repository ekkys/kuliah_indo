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
                                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                              <td>#1003528254</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022, 07:06 WIB</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                              <td>#1003526426</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022, 07:06 WIB</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                              <td>#1003524841</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022, 07:06 WIB</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                              <td>#1003528254</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022, 07:06 WIB</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                              <td>#1003526426</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022, 07:06 WIB</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                              <td>#1003524841</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022, 07:06 WIB</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                              <td>#1003528254</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022, 07:06 WIB</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                              <td>#1003526426</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022, 07:06 WIB</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                              <td>#1003524841</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022, 07:06 WIB</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                              <td>#1003528254</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022, 07:06 WIB</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                              <td>#1003526426</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022, 07:06 WIB</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                            <tr data-toggle="modal" data-target="#exampleModalCenter">
                                              <td>#1003524841</td>
                                              <td>Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</td>
                                              <td>Aug 12, 2022, 07:06 WIB</td>
                                              <td>Rp 499.000</td>
                                              <td>Waiting</td>
                                            </tr>
                                          </tbody>
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
                                                  <p class="main-text-desc">#1003528254</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="body-trans">
                                              <div class="main-status">
                                                <p class="main-text font-weight-bold">Invoice Number</p>
                                                <div>
                                                  <a href="{{ url('/invoice') }}" target="__blank" class="main-text-desc">INV/20220308/COU/1003528254</a>
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
                                                  <p href="#" target="__blank" class="main-text">Aug 12, 2022, 07:15 WIB</p>
                                                </div>
                                              </div>
                                              <div class="main-status mt-2">
                                                <p class="main-text">Purchase Verification</p>
                                                <div>
                                                  <p href="#" target="__blank" class="main-text">Aug 12, 2022, 07:10 WIB</p>
                                                </div>
                                              </div>
                                              <div class="main-status mt-2">
                                                <p class="main-text">Purchase Date</p>
                                                <div>
                                                  <p href="#" target="__blank" class="main-text">Aug 12, 2022, 07:06 WIB</p>
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
                                                      <img src="{{ asset('mainWeb/images/class/class1.webp') }}">
                                                      <div>
                                                        <a href="#" class="main-text font-weight-bold text-dark">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="wrapper-price">
                                                    <div class="total-price">
                                                      <p class="price-heading">Total Price</p>
                                                      <h5 class="main-price">Rp 499.000</h5>
                                                    </div>
                                                  </div>
                                                </div>
                                              </section>
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
@endsection