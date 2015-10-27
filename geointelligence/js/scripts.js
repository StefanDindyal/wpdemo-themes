(function($){

	$('.top').on('click', function(e){		
		var elem = $('#stage');		
		var destination = elem.offset().top;		
		$('html:not(:animated),body:not(:animated)').animate({scrollTop: destination}, 1000, 'easeInOutCirc');
		e.preventDefault();
	});
	$('.nav li a').on('click', function(e){
		var link = $(this).attr('href');
		var elem = $(link);		
		var destination = elem.offset().top - 120;		
		$('html:not(:animated),body:not(:animated)').animate({scrollTop: destination}, 1000, 'easeInOutCirc');
		e.preventDefault();		
	});

	$('#blog .posts').bxSlider({
		slideWidth: 280,
		minSlides: 1,
		maxSlides: 3,
		slideMargin: 40,
		pager: false
	});

})(jQuery);