/*
Template Name: HostGrids - Hosting & Domain Services HTML Template.
Author: GrayGrids
*/

(function () {
    //===== Prealoder

    window.onload = function () {
        window.setTimeout(fadeout, 500);
    }

    function fadeout() {
        document.querySelector('.preloader').style.opacity = '0';
        document.querySelector('.preloader').style.display = 'none';
    }

    
    // WOW active
    new WOW().init();


    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {

        // show or hide the back-top-top button
        var backToTo = document.querySelector(".scroll-top");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = "flex";
        } else {
            backToTo.style.display = "none";
        }

        var addToCart = document.querySelector(".add-to-cart");
        if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
            addToCart.style.display = "flex";
        } else {
            addToCart.style.display = "none";
        }

    };


    //===== mobile-menu-btn
    let navbarToggler = document.querySelector(".mobile-menu-btn");
    navbarToggler.addEventListener('click', function () {
        navbarToggler.classList.toggle("active");
    });


})();