@extends('layouts.mainWeb.main')

@section('container')

<!-- Banner Area -->
<section class="profile-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="profile-content">
                    <h4 class="wow fadeInUp" data-wow-delay=".2s">{{ $pembuka1->deskripsi }}</h4>
                    <h1 class="wow fadeInUp" data-wow-delay=".4s">{{ $pembuka2->deskripsi }}</h1>
                    <p class="wow fadeInUp" data-wow-delay=".6s">{{ $pembuka3->deskripsi }}</p>
                    <div class="button wow zoomIn" data-wow-delay="1s">
                        <a href="#pricing"><i class="lni lni-arrow-down-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- About Kuliah Indo -->
<section class="features section bg-white" id="pricing">
    <img class="shape" src="assets/images/shapes/shape.png" alt="#">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn font-orange" data-wow-delay=".2s">{{ $tentang1->deskripsi }}</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">{{ $tentang2->deskripsi }}</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">{{ $tentang3->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Kuliah Indo -->

<!-- Divisi Kuliah Indonesia -->
<section class="features section bg-orange">
    <img class="shape" src="assets/images/shapes/shape.png" alt="#">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn font-white" data-wow-delay=".2s">{{ $judulDivisi->deskripsi }}</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">{{ $deskripsiDivisi->deskripsi }}</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-4 col-12">
                <!-- Start Single Feature -->
                <div class="single-feature profile wow fadeInUp" data-wow-delay=".2s">
                    <div class="list-icon">
                        <i class="lni lni-user"></i>
                    </div>
                    <h3>{{ $judulDivisi1->deskripsi }}</h3>
                    <p>{{ $deskripsiDivisi1->deskripsi }}</p>
                </div>
                <!-- End Single Feature -->
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <!-- Start Single Feature -->
                <div class="single-feature profile wow fadeInUp" data-wow-delay=".4s">
                    <div class="list-icon">
                        <i class="lni lni-graduation"></i>
                    </div>
                    <h3>{{ $judulDivisi2->deskripsi }}</h3>
                    <p>{{ $deskripsiDivisi2->deskripsi }}</p>
                </div>
                <!-- End Single Feature -->
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <!-- Start Single Feature -->
                <div class="single-feature profile wow fadeInUp" data-wow-delay=".4s">
                    <div class="list-icon">
                        <i class="lni lni-briefcase"></i>
                    </div>
                    <h3>{{ $judulDivisi3->deskripsi }}</h3>
                    <p>{{ $deskripsiDivisi3->deskripsi }}</p>
                </div>
                <!-- End Single Feature -->
            </div>

        </div>
    </div>
</section>
<!-- End Divisi Kuliah Indonesia -->

<!-- Start Comment -->
<div class="pricing-style2 section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn font-orange" data-wow-delay=".2s">Komentar</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Komentar dari pengguna</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Berikut merupakan beberapa komentar dari pelanggan yang telah menerima manfaat dari Kuliah Indo.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($testimonis as $testimoni)
            <div class="col-lg-4 col-md-4 col-12">
                <!-- Start Single Comment s-->
                <div class="single-comment align-items-center" style="height: 375px">
                    <center>
                        <div class="image" style="background: url({{ asset('storage/'.$testimoni->image_testimoni) }}); width: 100px; height: 100px; background-size: cover;border-radius: 100px"> </div>
                        <blockquote class="mt-2">
                            {!! $testimoni->description !!}
                        </blockquote>
                        <div>
                            <h5 class="des">{{ $testimoni->name  }}</h5>
                        </div>
                    </center>
                </div>
                <!-- End Single Comment s-->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Comment -->

<!-- Start Team Area -->
<section class="team-area section" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Anggota</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Anggota dari Kuliah Indo</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Berikut beberapa anggota yang memiliki peran penting dalam pengembangan Kuliah Indo.</p>
                </div>
            </div>
        </div>
        <div class="row overflow-hidden">
            <div class="swiperTeam mySwiper">
                <div class="swiper-wrapper">
                
                @foreach ($karyawans as $karyawan)
                <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-feature">
                        <div class="image">
                            <img width="150px" src="{{ asset('storage/'.$karyawan->foto) }}" alt="">
                        </div>
                        <div class="name">
                            <h3>{{ $karyawan->name }} </h3>
                        </div>
                        <div class="position">
                            <p>{{ $karyawan->jabatan_name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                    {{-- <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-feature">
                            <div class="image">
                                <img src="{{ asset('mainWeb/images/team/Foto-Nurika.jpg') }}">
                            </div>
                            <div class="name">
                                <h3>Nurika Andana </h3>
                            </div>
                            <div class="position">
                                <p>CEO & Founder Kuliah.id</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-feature">
                            <div class="image">
                                <img src="{{ asset('mainWeb/images/team/Foto-Nimatur.jpeg') }}">
                            </div>
                            <div class="name">
                                <h3>Ni'matur R.</h3>
                            </div>
                            <div class="position">
                                <p>Project Control</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-feature">
                            <div class="image">
                                <img src="{{ asset('mainWeb/images/team/Foto-Indah.png') }}">
                            </div>
                            <div class="name">
                                <h3>Indah</h3>
                            </div>
                            <div class="position">
                                <p>Content Writer & Event</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-feature">
                            <div class="image">
                                <img src="{{ asset('mainWeb/images/team/Foto-Elfin.png') }}">
                            </div>
                            <div class="name">
                                <h3>Elfin</h3>
                            </div>
                            <div class="position">
                                <p>Content Writer & Event</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-feature">
                            <div class="image">
                                <img src="{{ asset('mainWeb/images/team/Foto-Anisa.png') }}">
                            </div>
                            <div class="name">
                                <h3>Anisa</h3>
                            </div>
                            <div class="position">
                                <p>Content Writer & Event</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-feature">
                            <div class="image">
                                <img src="{{ asset('mainWeb/images/team/Foto-Violita.jpg') }}">
                            </div>
                            <div class="name">
                                <h3>Violita Cahya</h3>
                            </div>
                            <div class="position">
                                <p>Video Creator & Editor</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-feature">
                            <div class="image">
                                <img src="{{ asset('mainWeb/images/team/Foto-Puteri.png') }}">
                            </div>
                            <div class="name">
                                <h3>Putri</h3>
                            </div>
                            <div class="position">
                                <p>Grafis Editor</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-feature">
                            <div class="image">
                                <img src="{{ asset('mainWeb/images/team/Foto-Nadia.jpeg') }}">
                            </div>
                            <div class="name">
                                <h3>Nadia Dwi</h3>
                            </div>
                            <div class="position">
                                <p>Project Control 2</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-feature">
                            <div class="image">
                                <img src="{{ asset('mainWeb/images/team/Foto-Alif.jpeg') }}">
                            </div>
                            <div class="name">
                                <h3>Alief</h3>
                            </div>
                            <div class="position">
                                <p>IT Team</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-feature">
                            <div class="image">
                                <img src="{{ asset('mainWeb/images/team/Foto-Tita.png') }}">
                            </div>
                            <div class="name">
                                <h3>Tita</h3>
                            </div>
                            <div class="position">
                                <p>Audio Editor</p>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Team Area -->

{{-- @include('partials.mainWeb.footer') --}}

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