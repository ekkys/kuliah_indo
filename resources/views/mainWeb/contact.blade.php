@extends('layouts.mainWeb.main')

@section('container')

    <section class="contact-area wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Contact Us</h2>
            <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
          </div>
  
          <div class="row contact-info">
  
            <div class="col-md-4">
              <div class="contact-address">
                <i class="lni lni-pin"></i>
                <h3>Address</h3>
                <address>A108 Adam Street, NY 535022, USA</address>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="contact-phone">
                <i class="lni lni-phone"></i>
                <h3>Phone Number</h3>
                <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="contact-email">
                <i class="lni lni-envelope"></i>
                <h3>Email</h3>
                <p><a href="mailto:info@example.com">info@example.com</a></p>
              </div>
            </div>
  
          </div>
        </div>
  
        <div class="container mb-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

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
        
      </section>

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