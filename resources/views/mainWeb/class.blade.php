@extends('layouts.mainWeb.main')

@section('container')
<section class="hero-area" style="padding: 0px;">
    <div class="container-fuild" style="padding: 0; margin: 0">
        <div class="banner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="text-wrapper">
                            <div class="title">Jangan Sampai Terlewat</div>
                            <div class="des">Sekarang kamu bisa akses kapan dan dimana saja, upgrade skillmu sekarang</div>
                            <div class="button">
                                <button class="button class">Mulai Belajar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 image-wrapper">
                        <img src="{{ asset('mainWeb/images/team/headermascot.png') }}" class="img-fluid img-class">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Classes -->
<section class="classes section bg-gray">
    <div class="container">
        <div class="title-container">
            <div class="title-wrapper">
                <h2 class="title wow fadeInUp">Semua Pilihan Kelas</h2>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
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
                <div class="col-lg-4 col-md-6 col-sm-12">
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
                <div class="col-lg-4 col-md-6 col-sm-12">
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
            </div>
    </div>
</section>
<!-- End Classes -->
@endsection