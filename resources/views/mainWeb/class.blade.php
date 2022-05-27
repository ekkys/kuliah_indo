@extends('layouts.mainWeb.main')

@section('container')

    <section class="hero-area" style="padding: 0px;">
        <div class="container-fuild" style="padding: 0; margin: 0">
            <div class="banner-wrapper" style="background-image: url('{{ asset('mainWeb/images/hero/slide1.png')}}');">
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
                        <form action="{{ url('/class') }}" method="get">
                            <div class="search-inner">
                                <div class="search">
                                    <input type="search" name="search" class="search-item" autocomplete="off" autocapitalize="off" placeholder="Ketik untuk mencari...">
                                </div>
                            </div>
                            <button class="btn-search" type="submit">
                                <i class="lni lni-search-alt"></i>
                            </button>
                        </form>
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
            <div class="row" id="data_kelas"></div>
            <div class="row">
                <!-- Button Tampilkan Lebih Banyak -->
                <div class="button2">
                    <a class="btn" onclick="load_more()">Tampilkan Lebih Banyak</a>
                </div>
                <!-- End Tampilkan Lebih Banyak -->
            </div>
        </div>
    </section>
    <!-- End Classes -->

    {{-- @include('partials.mainWeb.footer', ['setting' => $setting]) --}}
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
    

    <script>
        var now = 3;
        var finish = now + 3;
        var data = <?= $dataKelas ?>;
        var data_kelas = [];

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function load_more() {
            let kelas = $('#data_kelas');
            finish = now + 3;
            for (let index = now; index < finish; index++) {
               kelas.append(
                   `<div class="col-lg-4 col-md-4 col-sm-12">`+
                   `<div class="single-class">`+
                   `    <div class="image-cover">`+
                   `        <span class="promo" style="{{ empty($dataKelas->price) ? 'display: inline-block;' : 'display: none;' }}">`+
                   `            <span class="text-promo">Free</span>`+
                   `        </span>`+
                   `        <img src="" style="">`+
                   `    </div>`+
                   `   <div class="text-container">`+
                   `        <div class="category-wrapper">`+
                   `            <span class="category">`+data[index].topic+`</span>`+
                   `        </div>`+
                   `        <div class="date-wrapper">`+
                   `            <span class="date"><i class="lni lni-calendar"></i></span>`+
                   `       </div>`+
                   `         <div class="title-container">`+
                   `             <h3 class="title"></h3>`+
                   `         </div>`+
                   `         <div class="moderator-container">`+
                   `             <div class="image-wrapper align-self-center">`+
                   `                 <img src="{{ asset('mainWeb/images/team/team1.jpg') }}" alt="">`+
                   `                                </div>`+
                   `             <div class="moderator-wrapper">`+
                   `                 <div class="moderator-name">`+
                   `                     <span>`+data[index].tutor+`</span>`+
                   `                 </div>`+
                   `                 <div class="moderator-name">`+
                   `                     <p>`+data[index].jabatan+`</p>`+
                   `                 </div>`+
                   `             </div>`+
                   `         </div>`+
                   `         <div class="row des-container">`+
                   `             <div class="col-6" style="padding: 0;">`+
                   `                 <h3 class="des"><i class="lni lni-certificate"></i> Sertifikat</h3>`+
                   `             </div>`+
                   `             <div class="col-6" style="padding: 0;">`+
                   `                 <h3 class="des-2"><i class="lni lni-comments-alt"></i> Konsultasi</h3>`+
                   `             </div>`+
                   `         </div>`+
                   `         <div class="price-container row">`+
                   `             <div class="col-lg-7 col-md-12">`+
                   `                 <h4 class="price">Rp `+numberWithCommas(data[index].price)+`</h4>`+
                   `             </div>`+
                   `             <div class="col-lg-5 col-md-12" style="display: none;">`+
                   `                 <h4 class="old-price">Rp 1.000.000</h4>`+
                   `             </div>`+
                   `         </div>`+
                   `         <div class="button">`+
                   `             <a class="btn" href="{{ url('/class/singleClass/`+data[index].id+`') }}">Bergabung</a>`+
                   `         </div>`+
                   `     </div>`+
                   ` </div>`+
                   `</div>`);
                   now++;
                
            }
        }
    </script>

@endsection

