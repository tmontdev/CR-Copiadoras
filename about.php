<?php
/*
 * Template name: sobre
*/
get_header();
?>
<?php
$posts = array();
$args = array(
      'post_type' => 'about'
);
$query = new WP_Query( $args );
while($query->have_posts()) {
  $query->the_post();
      $posts[] = array(
        'title' => get_the_title(),
        'description' => get_the_content(),
        'position' => get_field('position'),
        'thumb' => get_the_post_thumbnail_url(),
      );
}
?>

<section class="first-section about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 equipments-presentation page-presentation">
        <h1 class="presentation-title"><span class="fa fa-print"></span> Sobre a CR Copiadoras</h1>
        <span class="presentation-subtitle"><?php echo do_shortcode('[easy_options id="aboutSubtitle"]'); ?></span>
      </div>
    </div>
  </div>
  <?php foreach ($posts as $post): ?>
  <div class="about-slider whole-block">
    <div class=" about-slide" style="background-color: #323232; background-position: <?php echo $post['position']; ?>; background-size: cover;">
      <div class="overlay">
        <div class="container">
          <h3 class="text-title text-center"><?php echo $post['title']; ?></h3>
          <h4 class="text-subtitle text-center"><?php echo $post['description']; ?></h4>
        </div>
      </div>
    </div>
  <?php endforeach;  wp_reset_query();?>
  </div>

</section>
<?php

get_footer();
?>
