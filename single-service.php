<?php get_header(); ?>

<?php
	while (have_posts()) {
		the_post();
    $posts[] = array(
      'title' => get_the_title(),
      'description' => get_the_excerpt(),
      'exerpt' => get_field('exerpt'),
      'icon' => get_field('icon'),
      'link' => get_the_permalink()
    );
?>
<section class="service-post first-section">
  <div class="container">
    <div class="row post-header">
      <div class="col-xs-12 post-title text-center">
        <h3 class="text-title text-green"><?php echo get_field('icon'); ?> <?php echo the_title(); ?></h3>
				<div class="service-post-img-field whole-block">
					<img class="service-post-img" align="middle" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				</div>

      </div>
    </div>
    <div class="row post-content">
      <div class="col-xs-12 post-content">
        <span><?php echo the_content();?></span>
      </div>
    </div>
  </div>
</section>
<?php } ?>
