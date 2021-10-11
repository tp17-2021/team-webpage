$(document).ready(function ($) {
    const navLinks = document.querySelectorAll('.nav-item');
    const menuToggle = document.getElementById('main-navbar');

    console.log(menuToggle);

    //const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle:false});


    /*navLinks.forEach((l) => {
        l.addEventListener('click', (e) => {
            e.preventDefault();

            // py is 5px on the logo image
            /*let menuHeight = $(".navbar-brand").height() + 10;
            /*let divId = $(e.target).attr('href');

            $('html, body').animate({
                scrollTop: $(divId).offset().top - menuHeight
            }, 100);


            if(window.screen.width < 768){
                bsCollapse.toggle();
            }
        })
    });*/
});
