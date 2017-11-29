<?php
/*
 * Template name: Equipamentos
*/
get_header();

$posts = array();
$args = array(
    'post_type' => 'equipments',
    'number_posts' => -1
);
$query = new WP_Query( $args );

while($query->have_posts()) {
  $query->the_post();
  $posts[] = array(
    'title' => get_the_title(),
    'description' => get_the_excerpt(),
    'link' => get_permalink(),
    'thumb' => get_the_post_thumbnail_url(),
  );

}
$posts = array_chunk($posts, 4);
?>
<section class="first-section equipments">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 equipments-presentation page-presentation">
        <h1 class="presentation-title"><span class="fa fa-print"></span> Equipamentos</h1>
        <span class="presentation-subtitle"><?php echo do_shortcode('[easy_options id="equipmentsSubtitle"]'); ?></span>
      </div>
    </div>
  </div>
</section>
<section class="equipments-itens">
  <div class="container">
    <div class="row">
      <?php foreach($posts as $chunk){ ?>
      <div class="row equipments-row">
        <?php foreach ($chunk as $post): ?>
        <a href="<?php echo $post['link']; ?>" class="col-xs-12 col-lg-3 equipment-item">
          <div class="equipment-item-field" style="background-image: url('<?php echo $post['thumb']; ?>');;">
            <div class="equipment-entering">
              <span class="fa fa-info-circle"></span> Saiba Mais!
            </div>
          </div>
          <div class="equipment-item-title">
            <?php echo $post['title']; ?>
          </div>
        </a>
        <?php endforeach;  wp_reset_query();?>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
  <?php
  get_footer(); ?>
