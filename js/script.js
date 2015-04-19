jQuery(document).ready(function($){
    $( "a.brand-logo" ).on({
        mouseenter: function() {
            $('.brand-logo').addClass('animated pulse')
        }, mouseleave: function() {
            $('.brand-logo').removeClass('animated pulse');
        }
    });
    
    $('#sub-nav a, .smoothscroll').on('click',function(event){
		var $anchor = $(this);
		$('html, body').stop().animate({
		scrollTop: $($anchor.attr('href')).offset().top -78}, 1500,'easeInOutExpo');
		event.preventDefault();
    });
    
    $('.parallax').parallax();
    
    $("body").jpreLoader(
		{
			splashID:"#jSplash",
			showPercentage:0,
			autoClose:!0,
			showSplash: true,
			splashFunction:function(){
				$("#jSplash").delay(1250).animate({opacity:1},700,"linear");
			}
	});
});

var waypoint = new Waypoint({
  element: document.getElementById('yo'),
  handler: function() {
    notify('Basic waypoint triggered')
  }
})