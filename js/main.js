// Rozwijane menu

$(document).ready(function() {
	$('.toggle').click(function(){
		var dropMenu = $('#drop-menu');
		
		if(dropMenu.hasClass('expanded')) {
			dropMenu.slideUp().removeClass('expanded');
		} else {
			dropMenu.slideDown().addClass('expanded');
		}
		
	});
});

// Smooth scroll 

$(document).on('click', 'a[href^="#"]', function (event) {
	event.preventDefault();

	$('html, body').animate({
		scrollTop: $($.attr(this, 'href')).offset().top
	}, 1000);
});