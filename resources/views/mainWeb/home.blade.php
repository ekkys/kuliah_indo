@extends('layouts.mainWeb.main')

@section('container')

    <!-- Start Hero Area -->
    <section class="hero-area bg-gray">
        <div class="container-fluid" style="padding: 0; margin: 0;">
            <div class="d-flex justify-content-center">
                <!-- Caorousel -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($slidebanners as $slidebanner)
                        <div class="swiper-slide">
                            <div class="img-container">
                                <a href="#slide1">
                                    <!-- <img width="150px" src="{{ asset('storage/'.$slidebanner->image_banner) }}" alt=""> -->
                                    <!-- <img width="150px" src="{{ url('storage/app/public/'.$slidebanner->image_banner) }}" alt=""> -->
                                    <img width="150px" src="{{ env('FILE_URL').$slidebanner->image_banner }}" alt="">
                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="swiper-button-prev" style="color: #fff; margin-left: 20px;"></div>
                    <div class="swiper-button-next" style="color: #fff; margin-right: 20px;"></div>
                </div>
                <!-- End Carousel -->
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Profile Area -->
    <section class="features section bg-white">
        <img class="shape" src="{{ asset('mainWeb/images/shapes/shape.png') }}" alt="#">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="list-icon">
                            <i class="lni lni-graduation"></i>
                        </div>
                        <h3>Belajar Dengan Mentor</h3>
                        <p>Pelajari semua materi dibantu dengan ahlinya.</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="list-icon">
                            <i class="lni lni-book"></i>
                        </div>
                        <h3>Modul Gratis</h3>
                        <p>Dapatkan juga modul dari kami sebagai bahan untuk belajar.</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="list-icon">
                            <i class="lni lni-certificate"></i>
                        </div>
                        <h3>Dapat Sertifikat</h3>
                        <p>Setelah menyelesaikan course kamu juga dapat sertifikat.</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Profile Area -->

    <!-- Start Pricing Style 2 Area -->
    <div class="pricing-style2 section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn font-orange" data-wow-delay=".2s">Class</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Pilih Kelas Yang Sesuai</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Pejalari dan cari tahu mengenai semua kelas yang
                            tersedia dalam Kuliah Indo.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php $id = 0; ?>
                @foreach($penjadwalans as $penjadwalan)
                @if($id < 3) 

                <!-- Class-->
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-pricing">
                        <div class="image-cover">
                            <span class="promo" style="{{ $penjadwalan->price == '0' ? 'display: inline-block;' : 'display: none;' }}">
                                <span class="text-promo">Free</span>
                            </span>
                            <img src="{{ env('FILE_URL').$penjadwalan->foto }}" style="">
                        </div>
                        <div class="text-container">
                            <span class="date"><i class="lni lni-calendar"></i>{{ $penjadwalan->date }}</span>
                            <div class="title-container">
                                <h3 class="title">{{ $penjadwalan->title }}</h3>
                            </div>
                            <h3 class="des"><i class="lni lni-certificate"></i> Sertifikat</h3>
                            <h3 class="des"><i class="lni lni-comments-alt"></i> Konsultasi</h3>
                            <div class="price-container row">
                                <div class="col-lg-7 col-md-12">
                                    <h4 class="price">{{ $penjadwalan->price == '0' ? 'Free' : 'Rp '.number_format($penjadwalan->price) }}</h4>
                                </div>
                                <div class="col-lg-5 col-md-12" style="display: none">
                                    <h4 class="old-price">Rp 1.000.000</h4>
                                </div>
                            </div>
                            <div class="button">
                                <a class="btn" href="{{ url('/class/singleClass/'.$penjadwalan->id) }}">Bergabung</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Class-->

                <?php $id++; ?>
                @endif
                @endforeach

                <!-- Button Tampilkan Lebih Banyak -->
                <div class="button2">
                    <a class="btn" href="{{ url('/class') }}">Selengkapnya <i class="lni lni-arrow-right"></i></a>
                </div>
                <!-- End Tampilkan Lebih Banyak -->
            </div>
        </div>
    </div>
    <!-- End Pricing Style 2 Area -->

    {{-- @include('partials.mainWeb.footer') --}}
    {{-- @include('partials.mainweb.footer', compact('setting')) --}}

    <!-- Start Footer Area -->
        <footer class="footer">
            <!-- Start Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-about">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="{{ asset('mainWeb/images/logo/logo-colored.svg') }}" alt="#">
                                        </a>
                                    </div>

                                    @foreach($settings as $setting)
                                            
                                        <p>{!! $setting->description !!}</p>
                                        <a class="call">{{ $setting->address }}</a> <br>
                                        <a class="call">{{ $setting->contact }}</a> <br>
                                        <a class="call">{{ $setting->email }}</a>
                                        <ul class="social">
                                            <li><a href="{{ $setting->facebook }}"><i class="lni lni-facebook-filled"></i></a></li>
                                            <li><a href="{{ $setting->instagram }}"><i class="lni lni-instagram"></i></a></li>
                                            <li><a href="{{ $setting->twitter }}"><i class="lni lni-twitter-original"></i></a></li>
                                            <li><a href="{{ $setting->linkedin }}"><i class="lni lni-linkedin-original"></i></a></li>
                                            <li><a href="{{ $setting->youtube }}"><i class="lni lni-youtube"></i></a></li>
                                        </ul>
                                    
                                    @endforeach
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-2 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Bantuan & Panduan</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Kebijakan Pengembalian</a></li>
                                        <li><a href="javascript:void(0)">Kebijakan Privasi</a></li>
                                        <li><a href="javascript:void(0)">Syarat & Ketentuan</a></li>
                                        <li><a href="javascript:void(0)">Tentang</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-2 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Informasi</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Pemesanan Shop</a></li>
                                        <li><a href="javascript:void(0)">Pemesanan E-Course</a></li>
                                        <li><a href="javascript:void(0)">Pemesanan Live Training</a></li>
                                        <li><a href="javascript:void(0)">Pencairan Dana Artikel</a></li>
                                        <li><a href="javascript:void(0)">Validasi Sertifikat</a></li>
                                        <li><a href="javascript:void(0)">Klaim Sertifikat Kelas Gratis</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-2 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Kerjasama</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Cara Menjadi Penulis</a></li>
                                        <li><a href="javascript:void(0)">Cara Menjadi Trainer</a></li>
                                        <li><a href="javascript:void(0)">Program Afiliasi</a></li>
                                        <li><a href="javascript:void(0)">Partnership</a></li>
                                        <li><a href="javascript:void(0)">Karir</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Footer Top -->
        </footer>
    <!--/ End Footer Area -->

@endsection