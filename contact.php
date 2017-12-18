<?php
/*
 * Template name: Contato
*/
get_header();
?>
<section id="contact"class="first-section contact">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 equipments-presentation page-presentation">
        <h1 class="presentation-title"><span class="fa fa-print"></span> Fale Conosco</h1>
        <span class="presentation-subtitle"><?php echo do_shortcode('[easy_options id="contactSubtitle"]'); ?></span>
      </div>
    </div>
    <div class="row write-for-us">
      <div class="col-xs-12 col-md-4 left-side">
        <h3 class="text-subtitle"><?php echo do_shortcode('[easy_options id="talktoustitle"]'); ?></h3>
        <span class="whole-block text-justify"><?php echo do_shortcode('[easy_options id="talktoustext"]'); ?></span>
        <a href="mailto:<?php echo do_shortcode('[easy_options id="contactmail"]'); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo do_shortcode('[easy_options id="contactmail"]'); ?> </a>
      </div>
      <div class="contact-form col-xs-12 col-md-8 right-side">
          <?php echo do_shortcode('[contact-form-7 id="73" title="Formulário"]'); ?>
      </div>

    </div>
    <div class="row avaliable">
      <div class="col-xs-12 col-md-4 left-side">
        <h3 class="text-subtitle"><?php echo do_shortcode('[easy_options id="avaliabletitle"]'); ?></h3>
        <span class="whole-block text-justify "> <?php echo do_shortcode('[easy_options id="avaliabletext"]'); ?></span>
        <div class="map whole-block">
          <a  class="text-center whole-block text-white" target="_blank" href="<?php echo do_shortcode('[easy_options id="MapsLink"]'); ?>"><i class="fa fa-map-marker" aria-hidden="true"></i> Como Chegar</a>
          <iframe class="whole-block" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14761.849781647483!2d-49.045308!3d-22.336161!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e994bd98f29c8e7!2sCR+COPIADORAS+E+TECNOLOGIA!5e0!3m2!1spt-BR!2sbr!4v1511384283068" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-xs-12 col-md-4 center-side">
        <h4 class="text-subtitle">Informações</h4>
        <div class="col-field whole-block">
          <a href="<?php echo do_shortcode('[easy_options id="MapsLink"]'); ?>" class="line-query whole-block">
            <h5 class="text-subtitle no-padding"> <i class="fa fa-map-o" aria-hidden="true"></i> Endereço</h5>
            <span class="whole-block pad"><?php echo do_shortcode('[easy_options id="addressfirstpart"]'); ?></span>
            <span class="whole-block pad"><?php echo do_shortcode('[easy_options id="addresssecondpart"]'); ?></span>
          </a>
          <div class="line-query whole-block">
            <h5 class="text-subtitle no-padding"> <i class="fa fa-clock-o" aria-hidden="true"></i> Horário de Funcionamento</h5>
            <span class="whole-block pad"><?php echo do_shortcode('[easy_options id="timing1"]'); ?></span>
            <span class="whole-block pad"><?php echo do_shortcode('[easy_options id="timing2"]'); ?></span>
          </div>
          <a href="https://api.whatsapp.com/send?phone=<?php echo do_shortcode('[easy_options id="WhatsAppLink"]'); ?>&text=Olá,%20estou%20dando%20uma%20olhada%20no%20seu%20site!%20" class="line-query whole-block">
            <h5 class="text-subtitle no-padding"> <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp</h5>
            <span class="whole-block pad"><?php echo do_shortcode('[easy_options id="WhatsApp"]'); ?></span>
          </a>
          <a href="tel:<?php echo do_shortcode('[easy_options id="contactphone2unform"]'); ?>" class="line-query whole-block">
            <h5 class="text-subtitle no-padding"> <i class="fa fa-phone" aria-hidden="true"></i> Telefone</h5>
            <span class="whole-block pad"><?php echo do_shortcode('[easy_options id="contactphone2"]'); ?></span>
          </a>
          <div class="line-query whole-block">
            <h5 class="text-subtitle no-padding"> <i class="fa fa-envelope-o" aria-hidden="true"></i> E-mail</h5>
            <a href="mailto:<?php echo do_shortcode('[easy_options id="contactmail"]'); ?>"><span class="whole-block pad"><?php echo do_shortcode('[easy_options id="contactmail"]'); ?></span></a>
            <a href="mailto:<?php echo do_shortcode('[easy_options id="supportmail"]'); ?>"><span class="whole-block pad"><?php echo do_shortcode('[easy_options id="supportmail"]'); ?></span></a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-4 right-side">
          <h4 class="text-subtitle">Redes Sociais</h4>
          <div class="col-field whole-block">
            <div class="line-query whole-block">
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcrcopiadorasetecnologia&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            <div class="line-query whole-block">
              <a target="_blank" href="https://www.facebook.com/ConceptionEngenharia/">
                <div class="col-xs-4 ct-fb">
                  <i class="circle fa fa-facebook" aria-hidden="true"></i>
                </div>
              </a>
              <a target="_blank" href="https://www.youtube.com/channel/UCZeUv9_Gf-5xEmAfe0QhJuA">
                <div class="col-xs-4 ct-yt">
                  <i class="circle fa fa-youtube" aria-hidden="true"></i>
                </div>
              </a>
              <a target="_blank" href="https://www.youtube.com">
                <div class="col-xs-4 ct-li">
                  <i class="circle fa fa-linkedin" aria-hidden="true"></i>
                </div>
              </a>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>

</div>
