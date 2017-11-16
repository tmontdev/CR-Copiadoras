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
        $('#home').css('height', homeHeight); //Define o Tamanho da Home
    }
    else{
      var fixedHeaderHeight = $(".mobile-fixed-header").height();
      var windowHeight = $(window).height();
      var homeHeight = windowHeight - fixedHeaderHeight;
      var menuHeight = $('.header-menu').height();
      var infoHeight = windowHeight - fixedHeaderHeight - menuHeight;
      var infoDistance = fixedHeaderHeight + menuHeight - 1;

      $('#home').css('height', homeHeight); //Define o Tamanho da Home
      $('.header-info').css('height', infoHeight).css('top', infoDistance); //Define o Tamanho da Home
      $('.switch').click(function(event) {
        if($('.hollback-area').hasClass('on')){
          $('.hollback-area').removeClass('on');
          $('.header-field').removeClass('on');
          $('#mobile-target').removeClass('fa-arrow-left');
          $('#mobile-target').addClass('fa-bars');
        }
        else{
          $('.hollback-area').addClass('on');
          $('.header-field').addClass('on');
          $('#mobile-target').removeClass('fa-bars');
          $('#mobile-target').addClass('fa-arrow-left');

        }
      });
      $('.hollback-area').click(function(event) {
        $('.hollback-area').removeClass('on');
        $('.header-field').removeClass('on');
        $('#mobile-target').removeClass('fa-arrow-left');
        $('#mobile-target').addClass('fa-bars');
      });
    }

})(jQuery);


//Equipments Code
(function($){
  var  equipSize = $('.equipment-item-field').width();
  $('.equipment-item-field').css('height', equipSize);
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
