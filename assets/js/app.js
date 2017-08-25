//General Code




//Header Code
(function($){
    // Para Desktops
    if($(window).width()>991){
        var menuHeight = $('.header-menu-area').height();
        var infoHeight = $('.header-info-area').height();
        var headerHeight = infoHeight + menuHeight;
        var windowHeight = $(window).height();
        var homeHeight = windowHeight - headerHeight;
        $('.header-info-area').css('margin-top', menuHeight);
        $('#home').css('height', homeHeight);
    }

    
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



