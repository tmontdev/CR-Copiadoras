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
        'background' => get_field('background'),
        'thumb' => get_the_post_thumbnail_url(),
      );
}
?>

<section class="first-section about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 about-presentation page-presentation">
        <h1 class="presentation-title"><span class="fa fa-print"></span> Sobre a CR Copiadoras</h1>
        <span class="presentation-subtitle"><?php echo do_shortcode('[easy_options id="aboutSubtitle"]'); ?></span>
      </div>
    </div>
  </div>
  <div class="about-content whole-block">
  <?php foreach ($posts as $post): ?>
    <div class="about-item whole-block" style="background-color: <?php echo $post['background']; ?>;" >
      <div class="container">
        <div class="row about-item-field">
          <div class="col-xs-12 col-lg-6 about-item-content">
            <h2 class="about-item-title text-title"> <?php echo $post['title']; ?></h2>
            <span class="about-item-text text-subtitle whole-block"><?php echo $post['description']; ?></span>
          </div>
          <div class="col-xs-12 col-lg-6 about-item-pic">
            <img class="about-item-img" src="<?php echo $post['thumb']; ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  <?php endforeach;  wp_reset_query();?>
  </div>
  </div>

</section>
<?php

get_footer();
?>
