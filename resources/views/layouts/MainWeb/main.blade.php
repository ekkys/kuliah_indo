<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Kuliah Indo - Media Pembelajaran Anak Kuliah Indonesia</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('mainWeb/images/favicon2.svg') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('mainWeb/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('mainWeb/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('mainWeb/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('mainWeb/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('mainWeb/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('mainWeb/css/main.css') }}" />

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    @include('partials.mainWeb.navbar')

    @yield('container')

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
                                <p>Merupakan platform untuk mahasiswa agar dapat menimba ilmu lebih dari yang ada.
                                </p>
                                <a class="call">1234-5678-9012</a> <br>
                                <a class="call">1234-5678-9012</a> <br>
                                <a class="call">1234-5678-9012</a>
                                <ul class="social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                </ul>
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

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up-circle"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('mainWeb/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('mainWeb/js/wow.min.js') }}"></script>
    <script src="{{ asset('mainWeb/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('mainWeb/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('mainWeb/js/count-up.min.js') }}"></script>
    <script src="{{ asset('mainWeb/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Autoplay
            autoplay: {
                delay: 3000,
            },

            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
</body>

</html>