(function ($) {
  
	$(function(){
		
		$('header nav li ul').hover(function(){
			$(this).parent().toggleClass('active-radius');
		});
		
		$('.intro-content ul').bxSlider({
			controls: false,
			mode: 'fade',
			auto: true,
			pager: true,
			pause: 10000
		});
		
		$('.alliances-block .view-content').bxSlider({
			auto: true,
			pager: true,
			controls: false
		});
		
		browserWidth = $(window).width();
		
		if (browserWidth <= 480) {
			$('#side .block-menu-block').addClass('mobile');
			$('#side .block-title a').click(function(){
				$(this).parent().parent().find('.menu-block-wrapper').slideToggle();
				return false;
			});
		}
		
		$('form').validate();
		
	});

}(jQuery));