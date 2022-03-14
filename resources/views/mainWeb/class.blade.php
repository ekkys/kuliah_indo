@extends('layouts.mainWeb.main')

@section('container')
<section class="hero-area" style="padding: 0px;">
    <div class="container-fuild" style="padding: 0; margin: 0">
        <div class="banner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 align-self-center">
                        <div class="text-wrapper">
                            <div class="des">Sekarang kamu bisa akses kapan dan dimana saja, upgrade skillmu sekarang</div>
                            <div class="button">
                                <button class="button class" id="mulai">Mulai Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Classes -->
<section class="classes section bg-gray">
    <div class="container">
        <div class="search-wrapper">
            <div class="title-wrapper">
                <h3 class="title wow fadeInUp">Mau Belajar Apa Hari ini?</h3>
            </div>
            <div class="search-container">
                <div class="search-field">
                    <div class="search-inner">
                        <div class="search">
                            <input type="text" class="search-item" autocomplete="off" autocapitalize="off" placeholder="Ketik untuk mencari...">
                        </div>
                    </div>
                    <button class="btn-search" type="button">
                        <i class="lni lni-search-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="title-container">
            <div class="title-wrapper">
                <h2 class="title wow fadeInUp">Semua Pilihan Kelas</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- Start Single Pricing s-->
                <div class="single-class">
                    <div class="image-cover">
                        <span class="promo">
                            <span class="text-promo">Sale</span>
                        </span>
                        <img src="{{ asset('mainWeb/images/class/class1.webp') }}" style="">
                    </div>
                    <div class="text-container">
                        <div class="category-wrapper">
                            <span class="category">Engineering Design</span>
                        </div>
                        <div class="date-wrapper">
                            <span class="date"><i class="lni lni-calendar"></i> 13 Maret 2020</span>
                        </div>
                        <div class="title-container">
                            <h3 class="title">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</h3>
                        </div>
                        <div class="moderator-container">
                            <div class="image-wrapper align-self-center">
                                <img src="{{ asset('mainWeb/images/team/team1.jpg') }}" alt="">
                            </div>
                            <div class="moderator-wrapper">
                                <div class="moderator-name">
                                    <span>Erika Safitri</span>
                                </div>
                                <div class="moderator-name">
                                    <p>CEO Kuliah Indo</p>
                                </div>
                            </div>
                        </div>
                        <div class="row des-container">
                            <div class="col-6" style="padding: 0;">
                                <h3 class="des"><i class="lni lni-certificate"></i> Sertifikat</h3>
                            </div>
                            <div class="col-6" style="padding: 0;">
                                <h3 class="des-2"><i class="lni lni-comments-alt"></i> Konsultasi</h3>
                            </div>
                        </div>
                        <div class="price-container row">
                            <div class="col-lg-7 col-md-12">
                                <h4 class="price">Rp 499.000</h4>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <h4 class="old-price">Rp 1.000.000</h4>
                            </div>
                        </div>
                        <div class="button">
                            <a class="btn" href="{{ url('/class/singleClass') }}">Bergabung</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing s-->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- Start Single Pricing s-->
                <div class="single-class">
                    <div class="image-cover">
                        <img src="{{ asset('mainWeb/images/class/class2.webp') }}" style="">
                    </div>
                    <div class="text-container">
                        <div class="category-wrapper">
                            <span class="category">Engineering Design</span>
                        </div>
                        <div class="date-wrapper">
                            <span class="date"><i class="lni lni-calendar"></i> 13 Maret 2020</span>
                        </div>
                        <div class="title-container">
                            <h3 class="title">Basic Autocad For Beginners</h3>
                            </div>
                        <div class="moderator-container">
                            <div class="image-wrapper align-self-center">
                                <img src="{{ asset('mainWeb/images/team/team1.jpg') }}" alt="">
                            </div>
                            <div class="moderator-wrapper">
                                <div class="moderator-name">
                                    <span>Erika Safitri</span>
                                </div>
                                <div class="moderator-name">
                                    <p>CEO Kuliah Indo</p>
                                </div>
                            </div>
                        </div>
                        <div class="row des-container">
                            <div class="col-6" style="padding: 0;">
                                <h3 class="des"><i class="lni lni-certificate"></i> Sertifikat</h3>
                            </div>
                            <div class="col-6" style="padding: 0;">
                                <h3 class="des-2"><i class="lni lni-comments-alt"></i> Konsultasi</h3>
                            </div>
                        </div>
                        <div class="price-container row">
                            <div class="col-lg-7 col-md-12">
                                <h4 class="price">Rp 499.000</h4>
                            </div>
                        </div>
                        <div class="button">
                            <a class="btn" href="javascript:void(0)">Bergabung</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing s-->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- Start Single Pricing s-->
                <div class="single-class">
                    <div class="image-cover">
                        <span class="promo">
                            <span class="text-promo">Free</span>
                        </span>
                        <img src="{{ asset('mainWeb/images/class/class3.webp') }}" style="">
                        </div>
                    <div class="text-container">
                        <div class="category-wrapper">
                            <span class="category">Architectural Design</span>
                        </div>
                        <div class="date-wrapper">
                            <span class="date"><i class="lni lni-calendar"></i> 13 Maret 2020</span>
                        </div>
                        <div class="title-container">
                            <h3 class="title">Digital Interior Design & Styling</h3>
                            </div>
                        <div class="moderator-container">
                            <div class="image-wrapper align-self-center">
                                <img src="{{ asset('mainWeb/images/team/team2.jpg') }}" alt="">
                            </div>
                            <div class="moderator-wrapper">
                                <div class="moderator-name">
                                    <span>Aisyah Rahmawati Ayu</span>
                                </div>
                                <div class="moderator-title">
                                    <p>Desainer Kuliah Indo</p>
                                </div>
                            </div>
                        </div>
                        <div class="row des-container">
                            <div class="col-6" style="padding: 0;">
                                <h3 class="des"><i class="lni lni-certificate"></i> Sertifikat</h3>
                            </div>
                            <div class="col-6" style="padding: 0;">
                                <h3 class="des-2"><i class="lni lni-comments-alt"></i> Konsultasi</h3>
                            </div>
                        </div>
                        <div class="price-container row">
                            <div class="col-lg-7 col-md-12">
                                <h4 class="price">Free</h4>
                            </div>
                        </div>
                        <div class="button">
                            <a class="btn" href="javascript:void(0)">Bergabung</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing s-->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- Start Single Pricing s-->
                <div class="single-class">
                    <div class="image-cover">
                        <span class="promo">
                            <span class="text-promo">Sale</span>
                        </span>
                        <img src="{{ asset('mainWeb/images/class/class1.webp') }}" style="">
                    </div>
                    <div class="text-container">
                        <div class="category-wrapper">
                            <span class="category">Engineering Design</span>
                        </div>
                        <div class="date-wrapper">
                            <span class="date"><i class="lni lni-calendar"></i> 13 Maret 2020</span>
                        </div>
                        <div class="title-container">
                            <h3 class="title">Fundamental Pemrograman CNC, CAD/CAM Dan Simulator CNC</h3>
                        </div>
                        <div class="moderator-container">
                            <div class="image-wrapper align-self-center">
                                <img src="{{ asset('mainWeb/images/team/team1.jpg') }}" alt="">
                            </div>
                            <div class="moderator-wrapper">
                                <div class="moderator-name">
                                    <span>Erika Safitri</span>
                                </div>
                                <div class="moderator-name">
                                    <p>CEO Kuliah Indo</p>
                                </div>
                            </div>
                        </div>
                        <div class="row des-container">
                            <div class="col-6" style="padding: 0;">
                                <h3 class="des"><i class="lni lni-certificate"></i> Sertifikat</h3>
                            </div>
                            <div class="col-6" style="padding: 0;">
                                <h3 class="des-2"><i class="lni lni-comments-alt"></i> Konsultasi</h3>
                            </div>
                        </div>
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
            <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- Start Single Pricing s-->
                <div class="single-class">
                    <div class="image-cover">
                        <img src="{{ asset('mainWeb/images/class/class2.webp') }}" style="">
                    </div>
                    <div class="text-container">
                        <div class="category-wrapper">
                            <span class="category">Engineering Design</span>
                        </div>
                        <div class="date-wrapper">
                            <span class="date"><i class="lni lni-calendar"></i> 13 Maret 2020</span>
                        </div>
                        <div class="title-container">
                            <h3 class="title">Basic Autocad For Beginners</h3>
                            </div>
                        <div class="moderator-container">
                            <div class="image-wrapper align-self-center">
                                <img src="{{ asset('mainWeb/images/team/team1.jpg') }}" alt="">
                            </div>
                            <div class="moderator-wrapper">
                                <div class="moderator-name">
                                    <span>Erika Safitri</span>
                                </div>
                                <div class="moderator-name">
                                    <p>CEO Kuliah Indo</p>
                                </div>
                            </div>
                        </div>
                        <div class="row des-container">
                            <div class="col-6" style="padding: 0;">
                                <h3 class="des"><i class="lni lni-certificate"></i> Sertifikat</h3>
                            </div>
                            <div class="col-6" style="padding: 0;">
                                <h3 class="des-2"><i class="lni lni-comments-alt"></i> Konsultasi</h3>
                            </div>
                        </div>
                        <div class="price-container row">
                            <div class="col-lg-7 col-md-12">
                                <h4 class="price">Rp 499.000</h4>
                            </div>
                        </div>
                        <div class="button">
                            <a class="btn" href="javascript:void(0)">Bergabung</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing s-->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- Start Single Pricing s-->
                <div class="single-class">
                    <div class="image-cover">
                        <span class="promo">
                            <span class="text-promo">Free</span>
                        </span>
                        <img src="{{ asset('mainWeb/images/class/class3.webp') }}" style="">
                        </div>
                    <div class="text-container">
                        <div class="category-wrapper">
                            <span class="category">Architectural Design</span>
                        </div>
                        <div class="date-wrapper">
                            <span class="date"><i class="lni lni-calendar"></i> 13 Maret 2020</span>
                        </div>
                        <div class="title-container">
                            <h3 class="title">Digital Interior Design & Styling</h3>
                            </div>
                        <div class="moderator-container">
                            <div class="image-wrapper align-self-center">
                                <img src="{{ asset('mainWeb/images/team/team2.jpg') }}" alt="">
                            </div>
                            <div class="moderator-wrapper">
                                <div class="moderator-name">
                                    <span>Aisyah Rahmawati Ayu</span>
                                </div>
                                <div class="moderator-title">
                                    <p>Desainer Kuliah Indo</p>
                                </div>
                            </div>
                        </div>
                        <div class="row des-container">
                            <div class="col-6" style="padding: 0;">
                                <h3 class="des"><i class="lni lni-certificate"></i> Sertifikat</h3>
                            </div>
                            <div class="col-6" style="padding: 0;">
                                <h3 class="des-2"><i class="lni lni-comments-alt"></i> Konsultasi</h3>
                            </div>
                        </div>
                        <div class="price-container row">
                            <div class="col-lg-7 col-md-12">
                                <h4 class="price">Free</h4>
                            </div>
                        </div>
                        <div class="button">
                            <a class="btn" href="javascript:void(0)">Bergabung</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing s-->
            </div>
            <!-- Button Tampilkan Lebih Banyak -->
            <div class="button2">
                <a class="btn" href="javascript:void(0)">Tampilkan Lebih Banyak</a>
            </div>
            <!-- End Tampilkan Lebih Banyak -->
        </div>
    </div>
</section>
<!-- End Classes -->


@endsection