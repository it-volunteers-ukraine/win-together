(function ($) {
    'use strict';

    /* ----------------------------
        Preloader
        ------------------------------ */

    $(window).on('load', function () {
        $('#preloader').delay(300).fadeOut('slow', function () {
            $(this).remove();
        });
    });

    /* ----------------------------
        jQuery sticky area
        ------------------------------ */

    $('.header-lover').sticky({
        topSpacing: 0,
    });

    /* ----------------------------
        Top Scroll
        ------------------------------ */

    var offset = 220;
    var duration = 500;
    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.scroll-top').fadeIn(duration);
        } else {
            jQuery('.scroll-top').fadeOut(duration);
        }
    });
    jQuery('.scroll-top').on('click', function () {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    });

    /* ----------------------------
        @module       Copyright
        @description  Evaluates the copyright year
        ------------------------------ */

    var currentYear = (new Date).getFullYear();
    $(document).ready(function () {
        $('.current-year').text((new Date).getFullYear());
    });

    /* ----------------------------
        venobox
        ------------------------------ */

    $('.venobox').venobox();

    /* ----------------------------
        Counter up
        ------------------------------ */

    $('.counter').counterUp({
        delay: 10,
        time: 3000,
    });

    /* ----------------------------
        Testimonials
        ------------------------------ */

    $('.testimonial-carousel').owlCarousel({
        loop: true,
        margin: 15,
        dots: false,
        items: 1,
        nav: true,
        autoplay: true,
        navText: ['<i class="fas fa-caret-left"></i>', 'Next'],
        responsiveClass: true,
    });

    /* ----------------------------
        partner-carousel
        ------------------------------ */

    $('.partner-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: false,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            767: {
                items: 2,
            },
            768: {
                items: 4,
            },
            1000: {
                items: 5,
            },
        },
    });

    $('.fundraising-carousel').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: true,
        autoplay: false,
        navText: [
            '<i class="fas fa-caret-left" aria-hidden="true"></i>',
            '<i class="fas fa-caret-right" aria-hidden="true"></i>',
        ],
        navContainer: '.fundraising-carousel-wrapper .custom-nav',
        responsive: {
            0: {
                items: 1,
            },
            767: {
                items: 2,
            },
        },
    });

})(jQuery);

function initializeLightbox() {
    lightbox.option({
        'resizeDuration': 200,
        'alwaysShowNavOnTouchDevices': true,
        'disableScrolling': true,
        'wrapAround': true,
        'showImageNumberLabel': false,
    });
}

document.addEventListener('DOMContentLoaded', function () {
    initializeLightbox();
});