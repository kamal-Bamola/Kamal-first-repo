(function($) {
    'use strict';
    AOS.init();




    //logo slider

    $('.logos-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        // centerMode: true,
        // centerPadding: '100px',
        responsive: [{
            breakpoint: 1300,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        }]
    });



    //Workers-Reviews

    $('.review-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: true,
        dots: false,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right"></i></button>',
        pauseOnHover: true,
        // centerMode: true,
        // centerPadding: '100px',
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });



    /*-- video-play --*/
    $(document).ready(function() {

        $('.play-pause-btn').on('click', function() {

            if ($(this).attr('data-click') == 1) {
                $(this).attr('data-click', 0)
                $(this).attr("class", "fa fa-play-circle")
                $('#video')[0].pause();
            } else {
                $(this).attr('data-click', 1)
                $(this).attr("class", "fa fa-pause-circle")
                $('#video')[0].play();
            }

        });

    });





    // video popup

    $('.video-play-button').click(function() {
        $(this).parents('.tab-video').children('.video-box').toggleClass('active');
    });




    // signup-login popup  



    $("#popupClose").on("click", function() {
        $(".popup-table").addClass("active-popup");
    });

    $("#popupClose").on("click", function() {
        $("body.popup-open").removeClass();
    });


    jQuery('.btn-signup').click(function(event) {
        jQuery('.popup').addClass('is-active');
        jQuery('.popup-sec-l').addClass('is-active-overlay');
        return false;
    });

    jQuery('.popup__close, .popup-sec-l').click(function(event) {
        jQuery('.popup, .pop-up-thanks').removeClass('is-active');
        jQuery('.popup-sec-l').removeClass('is-active-overlay');
        return false;
    });

    jQuery('.btn-post').click(function(event) {
        jQuery('.pop-up-thanks').addClass('is-active');
        jQuery('.popup-sec-l').addClass('is-active-overlay');
        return false;
    });


    // body-overflow


    // jQuery(".btn-signup").click(function() {
    //     jQuery('body').css('overflow', 'hidden'); //ADD THIS
    // });

    // jQuery(document).on('click', '.popup__close', function() {
    //     jQuery('body').css('overflow', 'auto'); //ADD THIS
    // });




    // sticky-header


    $(window).scroll(function() {
        var sticky = $('.header'),
            scroll = $(window).scrollTop();

        if (scroll >= 40) {
            sticky.addClass('fixed');
        } else {
            sticky.removeClass('fixed');

        }
    });










    //Avoid pinch zoom on iOS
    document.addEventListener('touchmove', function(event) {
        if (event.scale !== 1) {
            event.preventDefault();
        }
    }, false);
})(jQuery)