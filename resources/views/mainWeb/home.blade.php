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
                        <div class="swiper-slide">
                            <div class="img-container">
                                <a href="#slide1">
                                    <img src="{{ asset('mainWeb/images/hero/slide1.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-container">
                                <a href="#slide2">
                                    <img src="{{ asset('mainWeb/images/hero/slide2.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-container">
                                <a href="#slide3">
                                    <img src="{{ asset('mainWeb/images/hero/slide3.png') }}" alt="">
                                </a>
                            </div>
                        </div>
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
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Start Single Pricing s-->
                    <div class="single-pricing">
                        <div class="image-cover">
                            <span class="promo">
                                <span class="text-promo">Sale</span>
                            </span>
                            <img src="{{ asset('mainWeb/images/class/class1.webp') }}" style="">
                        </div>
                        <div class="text-container">
                            <span class="date"><i class="lni lni-calendar"></i> 13 Maret 2020</span>
                            <div class="title-container">
                                <h3 class="title">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</h3>
                            </div>
                            <h3 class="des"><i class="lni lni-certificate"></i> Sertifikat</h3>
                            <h3 class="des"><i class="lni lni-comments-alt"></i> Konsultasi</h3>
                            <div class="price-container row">
                                <div class="col-lg-7 col-md-12">
                                    <h4 class="price">Rp 499.000</h4>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <h4 class="old-price">Rp 1.000.000</h4>
                                </div>
                            </div>
                            <div class="button">
                                <a class="btn" href="javascript:void(0)">Bergabung</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Pricing s-->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Start Single Pricing s-->
                    <div class="single-pricing">
                        <div class="image-cover">
                            <img src="{{ asset('mainWeb/images/class/class2.webp') }}" style="">
                        </div>
                        <div class="text-container">
                            <span class="date"><i class="lni lni-calendar"></i> 13 Maret 2020</span>
                            <div class="title-container">
                                <h3 class="title">Basic Autocad For Beginners</h3>
                            </div>
                            <h3 class="des"><i class="lni lni-certificate"></i> Sertifikat</h3>
                            <h3 class="des"><i class="lni lni-comments-alt"></i> Konsultasi</h3>
                            <span class="price-container">
                                <h4 class="price">Rp 75.000</h4>
                            </span>
                            <div class="button">
                                <a class="btn" href="javascript:void(0)">Bergabung</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Pricing s-->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <!-- Start Single Pricing s-->
                    <div class="single-pricing">
                        <div class="image-cover">
                            <span class="promo">
                                <span class="text-promo">Free</span>
                            </span>
                            <img src="{{ asset('mainWeb/images/class/class3.webp') }}" style="">
                        </div>
                        <div class="text-container">
                            <span class="date"><i class="lni lni-calendar"></i> 13 Maret 2020</span>
                            <div class="title-container">
                                <h3 class="title">Digital Interior Design & Styling</h3>
                            </div>
                            <h3 class="des"><i class="lni lni-certificate"></i> Sertifikat</h3>
                            <h3 class="des"><i class="lni lni-comments-alt"></i> Konsultasi</h3>
                            <span class="price-container">
                                <h4 class="price">FREE</h4>
                            </span>
                            <div class="button">
                                <a class="btn" href="javascript:void(0)">Bergabung</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Pricing s-->
                </div>
                <!-- Button Tampilkan Lebih Banyak -->
                <div class="button2">
                    <a class="btn" href="{{ url('/class') }}">Selengkapnya <i class="lni lni-arrow-right"></i></a>
                </div>
                <!-- End Tampilkan Lebih Banyak -->
            </div>
        </div>
    </div>
    <!-- End Pricing Style 2 Area -->

    @include('partials.mainWeb.footer')

@endsection