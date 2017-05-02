//General Code




//Header Code
(function($){

	$('.ext-link').click(function(event) { //Quando clicar em um item do top menu
		var target = $(this).attr('data-target');
		$('.hollback-area').addClass('actived'); // aciona a area de hollback
		$(target).addClass('actived');
	});
	$('.hollback').click(function(event) { //quando clicar na área de hollback
		$('.header-section').each(function(index, el) { //percorre todos os item externos de menu,
			$(this).removeClass('actived');// retira a classe "acttived do menu"
		});
		$('.hollback').each(function(index, el) {
			$(this).removeClass('actived');
		});
	});
})(jQuery);


(function($){
  $(".home-slider").slick({
    autoplay:true,
    autoplaySpeed:10000,
    speed:600,
    slidesToShow:1,
    slidesToScroll:1,
    pauseOnHover:false,
    dots:false,
    pauseOnDotsHover:true,
    fade:false,
    draggable:true,
    prevArrow:'.controllers .prev',
    nextArrow:'.controllers .next',
  });
})(jQuery);

