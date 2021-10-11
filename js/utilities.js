$(document).ready(function ($) {
    const navLinks = document.querySelectorAll('.nav-item');
    const menuToggle = document.getElementById('main-navbar');

    const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle:false});
    $('.navbar-collapse a').click(function(){
        bsCollapse.toggle();
    });

    if(window.location.hash) {
        let menuHeight = $(".navbar .navbar-brand").height() + 10;
        console.log(menuHeight);
        menuHeight = 60;
        let hash = window.location.hash;
        let element = $('html, body').find(hash);
        if(element.length){
            $('html, body').animate({ scrollTop: $(window.location.hash).offset().top - menuHeight}, 0);
        }else{
            window.history.pushState("", document.title, window.location.pathname);
        }
    }

    //https://github.com/cferdinandi/smooth-scroll
    var scroll = new SmoothScroll('a[href*="#"]', {
        offset: function (anchor, toggle) {
            return  $(".navbar-brand").height() + 10;
        }
    });

});
