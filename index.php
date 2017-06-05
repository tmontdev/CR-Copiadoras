<?php get_header(); ?>
<section class="whole-block home" id="home">
	<div class="home-slider whole-block">
	<?php
	$posts = array();
	$args = array(
	    	'post_type' => 'Slides'
	);
	$query = new WP_Query( $args );
	while($query->have_posts()) {
		$query->the_post();
	    	$posts[] = array(
	    		'title' => get_the_title(),
	    		'description' => get_the_excerpt(),
	      		'link' => get_field('redirect_to'),
	      		'button' => get_field('redirect_name'),
	        		'thumb' => get_the_post_thumbnail_url(),
	        		'color' => get_field('color'),
	        		'position' => get_field('image_align'),
	        		'icon' => get_field('icon')

	    	);
	}
	?>
		<?php foreach ($posts as $post): ?>
		<div class=" slide" style="background-image: url('<?php echo $post['thumb']; ?>'); background-position: <?php echo $post['position']; ?>;">
			<div class="overlay">
				<div class="container">
					<h3 class="text-title text-center"><?php echo $post['title']; ?></h3>
					<h4 class="text-subtitle text-center"><?php echo $post['description']; ?></h4>
					<a href="<?php echo $post['link']; ?>" class="slide-link text-center"  style="background-color: <?php echo $post['color']; ?>">
						<?php echo $post['icon']; ?> <span class="link-text"> <?php echo $post['button'] ?></span>
					</a>

				</div>
			</div>
		</div>
	<?php endforeach;  wp_reset_query();?>
	</div>
</section>

<?php get_footer(); ?>