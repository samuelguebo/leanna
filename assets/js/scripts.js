jQuery(document).ready(function ($) {
        
    $(document).foundation(); // Initialize Foundation
    /*Turn input[type=submit] into button */
    $('input[type=submit]').addClass('button small');
    
    
    
    /* WOW effect with ScrollReveal 
    */
    window.sr = ScrollReveal();
    sr.reveal('.top-bar li', {
        duration: 1000
    }, 50);
    sr.reveal('.reveal', {
        duration: 1000
    }, 200);
    sr.reveal('.category-row .post-item');
    sr.reveal('footer .widget', {
        duration: 1500
    }, 150);
    sr.reveal('aside .widget', {
        duration: 2000
    }, 150);

    sr.reveal('.white-section .section-item', {
        duration: 1000
    }, 100);
    sr.reveal('.white-section article', {
        duration: 1000
    }, 100);
    sr.reveal('.white-section .section-description', {
        duration: 1000
    }, 100);
    
    sr.reveal('form input', {
        duration: 2000
    }, 50);
    
    
    
    /* Back to Top */
    if ($('#back-to-top').length) {
        var scrollTrigger = 700, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').fadeIn(800); //show 
                }
                else {
                    $('#back-to-top').fadeOut(800);
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
    
});