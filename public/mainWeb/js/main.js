/*
Template Name: HostGrids - Hosting & Domain Services HTML Template.
Author: GrayGrids
*/

(function () {
    //== Prealoder

    window.onload = function () {
        window.setTimeout(fadeout, 500);
    }

    function fadeout() {
        document.querySelector('.preloader').style.opacity = '0';
        document.querySelector('.preloader').style.display = 'none';
    }

    
    //== WOW active
    new WOW().init();


    //== Sticky
    window.onscroll = function () {

        // show or hide the back-top-top button
        var backToTo = document.querySelector(".scroll-top");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = "flex";
        } else {
            backToTo.style.display = "none";
        }

        // show or hide the price and buy button
        // var addToCart = document.querySelector(".add-to-cart");
        // if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
        //     addToCart.style.display = "flex";
        // } else {
        //     addToCart.style.display = "none";
        // }

    };


    //== Mobile Menu Button
    let navbarToggler = document.querySelector(".mobile-menu-btn");
    navbarToggler.addEventListener('click', function () {
        navbarToggler.classList.toggle("active");
    });


    //== Form Input Login 
    $('.form-control').on('input', function() {
        var $field = $(this).closest('.form-group');
        if (this.value == '') {
            $field.removeClass('field--not-empty');
        } else {
            $field.addClass('field--not-empty');
        }
    });


    //== Swiper Team
    var swiperTeam = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        loopFillGroupWithBlank: true,
        breakpoints: {
            1: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            766: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
        autoplay: {
            delay: 3000,
        },
      });

})();