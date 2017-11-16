<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CR Tecnologia | Seja Bem Vindo</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.com" media="screen" title="animate" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head();?>
</head>
<body>
<header class="header" id="header">
	<div class="mobile mobile-fixed-header whole-block">
		<div class="hollback-area hollback off">

		</div>
		<div class="header-switch">
			<a href="#" class="switch">
				<span class="fa fa-bars" id="mobile-target"></span>
			</a>
		</div>
		<div class="mobile-header-logo whole-block">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 logo-square">
						<a href="<?php echo get_home_url();?>" class="whole-block">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/logo-string-white.png">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-field">
		<div class="header-info whole-block">
			<div class="container">
				<div class="col-lg-3 logo-header-desktop desktop">
					<a href="<?php echo get_home_url();?>" class="whole-block text-center">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/logo-string-white.png" alt="">
					</a>
				</div>
				<div class="col-xs-12 col-lg-4 header-info-address text-white">
					<a href="<?php echo do_shortcode('[easy_options id="MapsLink"]'); ?>" class="header-address">
						<span class="fa fa-map-marker text-white absolute"></span>
						<span class="header-first-address address-line"><?php echo do_shortcode('[easy_options id="addressfirstpart"]'); ?></span>
						<span class="header-second-address address-line"><?php echo do_shortcode('[easy_options id="addresssecondpart"]'); ?></span>
					</a>
				</div>
				<div class="col-xs-12 col-lg-3 header-info-contact text-white">
					<span class="fa fa-phone absolute"></span>
					<a href="phone:<?php echo do_shortcode('[easy_options id="contactphone1unform"]'); ?>" class="header-phone contact-line">
						<span class="header-phone-number"><?php echo do_shortcode('[easy_options id="contactphone1"]'); ?></span>
					</a>
					<a href="mailto:<?php echo do_shortcode('[easy_options id="contactmail"]'); ?>" class="header-mail contact-line">
						<span class="header-mail-address"><?php echo do_shortcode('[easy_options id="contactmail"]'); ?></span>
					</a>
				</div>
			</div>
		</div>
		<div class="header-menu">
			<div class="container">
				<nav>
					<ul>
						<li class="header-menu-item header-home col-xs-12 col-lg-2">
							<a href="<?php echo get_home_url();?>" class="hearder-home-link whole-block">
								<span class="icon fa fa-home"></span>
								<span class="header-menu-option">home</span>
							</a>
						</li>
						<li class="header-menu-item header-home col-xs-12 col-lg-2">
							<a href="<?php echo get_home_url();?>" class="hearder-about-link whole-block">
								<span class="icon fa fa-question-circle-o"></span>
								<span class="header-menu-option">sobre</span>
							</a>
						</li>
						<li class="header-menu-item header-home col-xs-12 col-lg-2">
							<a href="<?php echo get_permalink(get_page_by_path('equipamentos')); ?>" class="hearder-equipment-link whole-block">
								<span class="icon fa fa-print"></span>
								<span class="header-menu-option">Equipamentos</span>
							</a>
						</li>
						<li class="header-menu-item header-home col-xs-12 col-lg-2">
							<a href="<?php echo get_home_url();?>" class="hearder-services-link whole-block">
								<span class="icon fa fa-cog"></span>
								<span class="header-menu-option">Serviços</span>
							</a>
						</li>
						<li class="header-menu-item header-home col-xs-12 col-lg-2">
							<a href="<?php echo get_permalink(get_page_by_path('contato')); ?>" class="hearder-contact-link whole-block">
								<span class="icon fa fa-envelope-o"></span>
								<span class="header-menu-option">Contato</span>
							</a>
						</li>
						<li class="header-menu-item header-home col-xs-12 col-lg-2">
							<div class="row">
								<a href="https://www.facebook.com/crsolucoes.digitais" class="hearder-fb-link col-xs-4">
									<span class="icon fa fa-facebook"></span>
								</a>
								<a href="https://www.facebook.com/crsolucoes.digitais" class="hearder-insta-link col-xs-4">
									<span class="icon fa fa-instagram"></span>
								</a>
								<a href="https://www.facebook.com/crsolucoes.digitais" class="hearder-youtube-link col-xs-4">
									<span class="icon fa fa-youtube"></span>
								</a>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

</header>
