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
	<?php wp_head(); ?>
</head>
<body>
	<header id="header" class="header whole-block">
		<div class="header-external-line whole-block">
			<div class="container">
				<div class="ext-field menu-switch col-xs-2">
					<a href="#" class="ext-link text-center whole-block" data-target="#header-menu">
						<span class="fa fa-bars icon-menu"></span>
						<span class="icon-text desktop">Menu</span>
					</a>
				</div>
				<div class="ext-field store-switch col-xs-2">
					<a href="#" class="ext-link text-center whole-block" data-target="#header-store">
						<span class="fa fa-shopping-cart icon-menu"></span>
						<span class="icon-text desktop">Loja Virtual</span>
					</a>
				</div>
				<div class="ext-field logo-switch col-xs-4">
					
				</div>
				<div class="ext-field search-switch col-xs-2">
					<a href="#" class="ext-link text-center whole-block" data-target="#header-search">
						<span class="fa fa-search icon-menu"></span>
						<span class="icon-text desktop">Pesquisar</span>
					</a>
				</div>
				<div class="ext-field login-switch col-xs-2">
					<a href="#" class="ext-link text-center whole-block" data-target="#header-login">
						<span class="fa fa-user icon-menu"></span>
						<span class="icon-text desktop">Entrar</span>
					</a>
				</div>
				
			</div>
		</div>
		<section class="header-menu header-section header-section-left" id="header-menu">
			<div class="whole-block">
				<a href="#" class="hollback header-section-close col-xs-2">
					<div class="close-icon">
						<div class="close-line first-row"></div>
						<div class="close-line last-row"></div>						
					</div>
				</a>
				<div class="row">
					<div class="col-xs-12 menu-logo section-icon text-center">
						
					</div>
					<menu id="menu" class="menu menu-local col-xs-12"></menu>
				</div>
			</div>
		</section>
		<section class="header-store header-section header-section-left" id="header-store">
			<div class="whole-block">
				<a href="#" class="hollback header-section-close col-xs-2">
					<div class="close-icon">
						<div class="close-line first-row"></div>
						<div class="close-line last-row"></div>
						
					</div>
				</a>
				<div class="row">
					<div class="col-xs-12 store-icon section-icon text-center">
						<span class="fa fa-shopping-cart"></span>
						<h4 class="section-title whole-block text-subtitle">Loja Virtual</h4>
					</div>
				</div>
			</div>
		</section>
		<section class="header-search header-section header-section-right" id='header-search'>
			<div class="whole-block">
				<a href="#" class="hollback header-section-close col-xs-2">
					<div class="close-icon">
						<div class="close-line first-row"></div>
						<div class="close-line last-row"></div>
						
					</div>
				</a>
				<div class="row">
					<div class="col-xs-12 search-icon section-icon text-center">
						<span class="fa fa-search"></span>
						<h4 class="section-title whole-block text-subtitle">Pesquisa</h4>
					</div>
				</div>
			</div>
		</section>
		<section class="header-login header-section header-section-right" id='header-login'>
			<div class="whole-block">
				<a href="#" class="hollback header-section-close col-xs-2">
					<div class="close-icon">
						<div class="close-line first-row"></div>
						<div class="close-line last-row"></div>
						
					</div>
				</a>
				<div class="row">
					<div class="col-xs-12 login-icon section-icon text-center">
						<span class="fa fa-user"></span>
						<h4 class="section-title whole-block text-subtitle">Acesso Restrito</h4>
					</div>
				</div>
			</div>
		</section>
		<section class="hollback hollback-area">
			
		</section>
	</header>

	
</body>
</html>