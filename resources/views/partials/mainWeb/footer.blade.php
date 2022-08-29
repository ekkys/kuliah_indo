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
                            <a class="call">{{ $settings->address }}</a> <br>
                            <a class="call">{{ $settings->contact }}</a> <br>
                            <a class="call">{{ $settings->email }}</a>
                            <ul class="social">
                                <li><a href="{{ $settings->facebook }}"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="{{ $settings->instagram }}"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="{{ $settings->twitter }}"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="{{ $settings->linkedin }}"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="{{ $settings->youtube }}"><i class="lni lni-youtube"></i></a></li>
                            </ul>

                            {{-- @foreach($setting)
                                
                            <p>{{ $setting->description }}</p>
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
                            
                            @endforeach --}}

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