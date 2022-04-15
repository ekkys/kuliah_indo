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
    <link rel="stylesheet" href="{{ asset('mainWeb/scss/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('mainWeb/fonts/icomoon/style.css') }}" />

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
    <script src="{{ asset('mainWeb/js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('mainWeb/js/popper.min.js') }}"></script>
    <script src="{{ asset('mainWeb/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets\plugins\autoNumeric\autoNumeric.min.js') }}"></script>
    <script src="{{ asset('mainWeb/js/main.js') }}"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            centeredSlides: true,
            spaceBetween: 30,

            breakpoints: {
                1700: {
                    slidesPerView: 1.86,
                },
                1600: {
                    slidesPerView: 1.55,
                },
                1500: {
                    slidesPerView: 1.45,
                },
                1400: {
                    slidesPerView: 1.5,
                },
                1366: {
                    slidesPerView: 1.4,
                },
                1199: {
                    slidesPerView: 1.3,
                },
                1100: {
                    slidesPerView: 1.33,
                },
                992: {
                    slidesPerView: 1.2,
                },
                900: {
                    slidesPerView: 1.23,
                },
                850: {
                    slidesPerView: 1.23,
                },
                800: {
                    slidesPerView: 1.16,
                },
                768: {
                    slidesPerView: 1,
                },
            },

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
            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
    <script>
        document.getElementById("mulai").onclick = function(event) {
            document.querySelector('.classes').scrollIntoView()
        };
    </script>
</body>

</html>