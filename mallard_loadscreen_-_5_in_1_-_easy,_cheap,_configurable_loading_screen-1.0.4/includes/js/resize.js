$(document).ready(function() {
	$('.audio').prop("volume", 0.5);
	$(window).resize(function(){
		$('.wrapper').css({
		position:'absolute',
			left: ($(window).width() 
			- $('.wrapper').outerWidth())/2,
			top: ($(window).height() 
			- $('.wrapper').outerHeight())/2
		});	
	});
	$(window).resize();
	$('#background-scroll').cycle({ 
		fx: 'fade',
		pause: 0, 
		speed: 1800,
		timeout: 3500
	});
});