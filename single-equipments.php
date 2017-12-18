<?php get_header(); ?>

<?php
	while (have_posts()) {
		the_post();
    $posts[] = array(
      'title' => get_the_title(),
      'description' => get_the_excerpt(),
      'exerpt' => get_field('exerpt'),
      'marca' => get_field('brand'),
      'ppms' => get_field('ppms'),
      'duplex' => get_field('duplex_print'),
      'feed' => get_field('document_feed')
    );
?>
<section class="equipment-post first-section">
  <div class="container">
    <div class="row post-header">
      <div class="col-xs-12 col-lg-6 post-title text-center">
        <h3 class="text-title"><?php echo get_field('brand');?> <?php echo the_title(); ?></h3>
        <span class="text-subtitle"><?php echo get_field('excerpt');?></span>
			</div>
      <div class="col-xs-12 col-lg-6 equipment-post-img text-center">
        <h3 class="text-title"><?php echo get_the_post_thumbnail();?></h3>
      </div>
    </div>
    <div class="row post-content">
      <div class="col-xs-12 col-lg-6 post-content">
        <?php
        $thecontent = get_the_content();
        if(!empty($thecontent)) { ?>
          <span class="equipment-description text-subtitle"><?php echo get_the_content();?></span>
        <?php } ?><span></span>
      </div>
      <div class="col-xs-12 col-lg-6 post-info">
        <?php
          $thecontent = get_field('ppms');
          if(!empty($thecontent)) { ?>
            <h4 class="post-info-line text-title">Páginas por Minuto: <span class="info-query text-subtitle"><?php echo get_field('ppms'); ?></span></h4>
        <?php } ?>
        <?php
          $thecontent = get_field('duplex_print');
          if(!empty($thecontent)) { ?>
            <h4 class="post-info-line text-title">Impressão Duplex: <span class="info-query text-subtitle"><?php echo get_field('duplex_print'); ?></span></h4>
        <?php } ?>
        <?php
          $thecontent = get_field('ppmd');
          if(!empty($thecontent)) { ?>
            <h4 class="post-info-line text-title">Páginas por Minuto (Duplex): <span class="info-query text-subtitle"><?php echo get_field('ppmd'); ?></span></h4>
        <?php } ?>
        <?php
          $thecontent = get_field('document_feed');
          if(!empty($thecontent)) { ?>
            <h4 class="post-info-line text-title">Alimentador de Documentos: <span class="info-query text-subtitle"><?php echo get_field('document_feed'); ?></span></h4>
        <?php } ?>
        <?php
          $thecontent = get_field('add_info');
          if(!empty($thecontent)) { ?>
            <h4 class="post-info-line text-title">Informações Adicionais: <span class="info-query text-subtitle"><?php echo get_field('add_info'); ?></span></h4>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php get_footer(); ?>
