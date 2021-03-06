$(document).ready(function ($) {
    const menuToggle = document.getElementById('main-navbar');
    const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle: false});
    const menuHeight = 59;

    AOS.init();

    // after clicking on manu item, hide collapsible navbar
    $('.navbar-collapse a').click(function () {
        let toggler_visible = $('.navbar .navbar-toggler').is(':visible');
        if (toggler_visible) {
            bsCollapse.toggle();
        }
    });

    // animate when loading page with anchor in url
    if (window.location.hash) {
        scrollToAnchor(window.location.hash, 500);
    }

    // on any href click, scroll to element, with offset -60 (menu height)
    $('a[href^="#"]').on('click', function (event) {
        let anchor = $(this).attr('href');
        event.preventDefault();
        scrollToAnchor(anchor);
    });

    // scroll to anchor element
    function scrollToAnchor(selector, timeout = 100) {
        selector = selector.trim();

        if(selector === '#'){
            document.location.hash = selector;
            $('html, body').animate({
                scrollTop: 0,
            }, timeout);
            return;
        }

        let target = $('html, body').find(selector);
        if (target.length) {
            document.location.hash = selector;
            $('html, body').animate({
                scrollTop: target.offset().top - menuHeight
            }, timeout);
        }
    }

    $('.main-slider').slick({
        dots: false,
        prevArrow: false,
        nextArrow: false,
    });

    $('#app-images-nav button[data-bs-toggle="tab"]').on('click', function (e) {
        $('.vt-images-slider').slick('refresh');
        $('.stats-app-images-slider').slick('refresh');
        $('.g-images-slider').slick('refresh');
    });

    $('.stats-app-images-slider').slick({
        dots: false,
        prevArrow:'<span type="button" class="slick-control slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></span>',
        nextArrow:'<span type="button" class="slick-control slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>',
    });

    $('.vt-images-slider').slick({
        dots: false,
        prevArrow:'<span type="button" class="slick-control slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></span>',
        nextArrow:'<span type="button" class="slick-control slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>',
    });

    $('.g-images-slider').slick({
        dots: false,
        prevArrow:'<span type="button" class="slick-control slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></span>',
        nextArrow:'<span type="button" class="slick-control slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>',
    });
});
