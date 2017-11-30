<?php
/*
 * Template name: serviços
*/
get_header();
?>
<?php
$posts = array();
$args = array(
    'post_type' => 'service',
    'number_posts' => -1
);
$query = new WP_Query( $args );

while($query->have_posts()) {
  $query->the_post();
  $posts[] = array(
    'title' => get_the_title(),
    'description' => get_the_excerpt(),
    'exerpt' => get_field('exerpt'),
    'icon' => get_field('icon'),
  );

}
$posts = array_chunk($posts, 3);
?>

<section class="first-section services" id="services">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 equipments-presentation page-presentation">
        <h1 class="presentation-title"><span class="fa fa-cog"></span> Conheça Nossos Serviços</h1>
        <span class="presentation-subtitle"><?php echo do_shortcode('[easy_options id="servicesSubtitle"]'); ?></span>
      </div>
    </div>
  </div>
  <div class="services-content whole-block">
    <div class="container">
      <?php foreach($posts as $chunk){ ?>
      <div class="row services-row">
        <?php foreach ($chunk as $post): ?>
          <div class="col-xs-12 col-lg-4 services-item">
            <div class="services-item-field whole-block">
              <h2 class="services-item-title text-title"><?php echo $post['icon']; ?> <?php echo $post['title']; ?></h2>
              <span class="services-item-exerpt text-sutitle"><?php echo $post['exerpt']; ?></span>
            </div>
            <div class="row services-item-entrance">
              <div class="whole-block col-xs-6 talk-to">
                <span class="fa fa-envelope-o"></span><span> Fale Conosco</span>
              </div>
              <div class="whole-block col-xs-6 know-more">
                <span class="fa fa-info-circle"></span><span> Saiba Mais</span>
              </div>
            </div>
          </div>
        <?php endforeach;  wp_reset_query();?>
      </div>
      <?php } ?>
    </div>
  </div>



<?php get_footer(); ?>
