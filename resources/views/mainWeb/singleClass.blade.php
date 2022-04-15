@extends('layouts.mainWeb.main')

@section('container')

    <!-- Start Single Post Banner -->
    <section class="single-post section">
        <div class="container">
            <div class="single-post-wrapper">
                <div class="logo-wrapper">
                    <img src="{{ asset('mainWeb/images/logo/iconlogo.svg') }}" class="logo">
                </div>
                <div class="company-wrapper">
                    <h6 class="company">Kuliah Indo</h6>
                </div>
                <div class="class-name-wrapper">
                    <span class="class-name">{{ $dataKelas->title }}</span>
                </div>
                <div class="date-wrapper">
                    <?php 
                    
                        $date = explode( " - ", $dataKelas->date);
                        $startDate = str_replace('/', '-', $date[0]);
                        $endDate = str_replace('/', '-', $date[1]);
                        $startTime = $dataKelas->timestart;
                        $endTime = $dataKelas->timeend;
                    
                    ?>
                    <span class="date">{{ date('F d, Y', strtotime($startDate)) }} - {{ date('F d, Y', strtotime($endDate)) }} | {{ $startTime }} - {{ $endTime }}</span>
                </div>
                <div class="moderator-container">
                    <div class="row container-fluid" style="margin: auto">
                        <div class="image-wrapper align-self-center col-lg-3 col-md-3 col-sm-0">
                            <img src="{{ asset('mainWeb/images/team/team1.jpg') }}" alt="">
                        </div>
                        <div class="moderator-wrapper col-lg-3 col-md-3 col-sm-4">
                            <div class="moderator-about">
                                <center>Pembawa Materi</center>
                            </div>
                            <div class="moderator-name">
                                <center>{{ $dataKelas->tutor }}</center>
                            </div>
                        </div>
                        <div class="moderator-wrapper col-lg-3 col-md-3 col-sm-4">
                            <div class="moderator-about">
                                <center>Sebagai</center>
                            </div>
                            <div class="moderator-name">
                                <center>{{ $dataKelas->jabatan }}</center>
                            </div>
                        </div>
                        <div class="moderator-wrapper col-lg-3 col-md-3 col-sm-4">
                            <div class="moderator-about">
                                <center>Kategori</center>
                            </div>
                            <div class="moderator-name">
                                <center>{{ $dataKelas->topic }}</center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Single Post Banner -->

    <!-- Start Single Post Article -->
    <section class="article bg-gray section">
        <div class="container">

            {{-- Bottom Navbar --}}
            <div class="add-to-cart">
                <div class="container">
                    <div class="row p-0 m-0 d-flex">
                        <div class="col-8">
                            <span class="course-price">{{ $dataKelas->price == '0' ? 'Free' : 'Rp '.number_format($dataKelas->price) }}</span>
                            <span class="course-old-price" style="display: none">Rp 1.000.000</span>
                        </div>
                        <div class="col-4 text-center">
                            <div class="cart-wrapper">
                                <button class="add-to-cart-button"  data-toggle="modal" data-target="#modalBuy" >Buy Course</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   Buy Course
                                  </button>
                            </div>
                        </div>

                        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
                         {{-- modal --}}
                         <div class="modal fade bd-example-modal-lg" id="modalBuy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            </div>
            {{-- End Bottom Navbar --}}

            {{-- Description --}}
            <div class="article-wrapper">
                {!! $dataKelas->description !!}
            </div>
            {{-- End Description --}}

        </div>
                                   
    </section>
    <!-- End Single Post Article -->

    @include('partials.mainWeb.footer')

@endsection