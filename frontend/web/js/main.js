$(function(){
    $('.mygym-modal').addClass('animated fadeInUp');
});

$(document).ready(function(){
    $("#userrole").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});

(function ($) {

    'use strict';

    var mobileMenu = $('.main-menu .nav');
    mobileMenu.slicknav({
        prependTo: '.mobile-menu'
    });
	
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 100) {
            $('.header-bottom').addClass('fixed-top');
        } else {
            $('.header-bottom').removeClass('fixed-top');
        }
    });


    var smoothScroll = $('.main-menu ul li a');
    smoothScroll.on('click', function (e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 1000);
        e.preventDefault();
    });


    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 0) {
            $('body').scrollspy({
                target: '.main-menu',
                offset: 63.8
            });
        } else {
            $('body').scrollspy({
                target: '.main-menu',
                offset: -1
            });
        }
    });

    var mainBannerArea = $('.banner-area');

    mainBannerArea.owlCarousel({
        animateOut: 'slideOutDown',
        animateIn: 'fadeIn',
        items: 1,
        loop: true,
        autoplay: false,
        autoplayTimeout: 6000, // auto play time
        mouseDrag: false,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i><div class="itemprebg"></div>', '<div class="itemnextbg"></div><i class="fas fa-angle-right"></i>']
    });

    var itemBg = $('.single-banner .itembg');

    $('.banner-area .single-banner').each(function () {
        var itmeImg = $(this).find('.itembg img').attr('src');
        $(this).css({
            background: 'url(' + itmeImg + ')'
        });
    });

    function slideThumb() {

        $('.banner-area .owl-item').removeClass('next prev');

        var currenSlide = $('.banner-area .owl-item.active');
        currenSlide.next('.owl-item').addClass('next');
        currenSlide.prev('.owl-item').addClass('prev');

        var nextSlideImg = $('.owl-item.next').find('.itembg img').attr('src');
        var prevSlideImg = $('.owl-item.prev').find('.itembg img').attr('src');

        $('.banner-area .owl-nav .owl-prev .itemprebg').css({
            background: 'url(' + prevSlideImg + ')'
        });

        $('.banner-area .owl-nav .owl-next .itemnextbg').css({
            background: 'url(' + nextSlideImg + ')'
        });

    }

    slideThumb();

    var dot = $('.banner-area .owl-dot');
    dot.each(function () {
        var index = $(this).index() + 1;
        if(index < 10){
            $(this).html('0').append(index);
          }else{
             $(this).html(index);
        }
    });

    mainBannerArea.on('translate.owl.carousel', function () {
        $('.single-banner h3').removeClass('fadeInUp animated animated-04s').hide();
        $('.single-banner h1').removeClass('fadeInUp animated animated-08s').hide();
        $('.single-banner p').removeClass('fadeInUp animated animated-12s').hide();
    });

    mainBannerArea.on('translated.owl.carousel', function () {
        slideThumb();
        $('.owl-item.active .single-banner h3').addClass('fadeInUp animated animated-04s').show();
        $('.owl-item.active .single-banner h1').addClass('fadeInUp animated animated-08s').show();
        $('.owl-item.active .single-banner p').addClass('fadeInUp animated animated-12s').show();
    });

    $.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topDistance: '300', // Distance from top before showing element (px)
        topSpeed: 300, // Speed back to top (ms)
        animation: 'fade', // Fade, slide, none
        animationInSpeed: 200, // Animation in speed (ms)
        animationOutSpeed: 200, // Animation out speed (ms)
        scrollText: '<i class="fas fa-level-up-alt"></i>', // Text for element
        activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });
    
    $(window).on('load', function () {
        
 
        
    });
	$(window).on("scroll", function() {
    if($(window).scrollTop() > 200) {
        $(".navbar-inverse").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".navbar-inverse").removeClass("active");
    }
});


}(jQuery));