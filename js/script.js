jQuery(document).ready(function($){
    $( "a.brand-logo" ).on({
        mouseenter: function() {
            $('.brand-logo').addClass('animated pulse')
        }, mouseleave: function() {
            $('.brand-logo').removeClass('animated pulse');
        }
    });
});