jQuery(document).ready(function ($) {
    $(".regular").slick({
        dots: true,
        autoplay: true,
        autoplaySpeed:9000,
        speed:700,
        mobileFirst: true,
        slidesToShow:1,
        slidesToScroll:1,
        pauseOnHover:false,
        respondTo:'min',
        cssEase:'linear',
        prevArrow: '<span class="icon-angle-left"></span>',
        nextArrow: '<span class="icon-angle-right"></span>'
    });
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: true,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '10px',
        prevArrow: '<span class="icon-angle-left"></span>',
        nextArrow: '<span class="icon-angle-right"></span>',
        responsive: [
        {
            breakpoint: 450,
            settings: {
            dots: false,
            slidesToShow: 3,  
            centerPadding: '0px',
        }
        },
        {
            breakpoint: 420,
            settings: {
            autoplay: true,
            dots: false,
            slidesToShow: 1,
            centerMode: false,
            }
        }]
    });
});	