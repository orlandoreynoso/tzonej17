<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/estilo.css">
	<!-- script type='text/javascript' src='<?php // bloginfo('stylesheet_directory'); ?>/js/analitycs.js'></script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/images/manifest.json">
	<link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>
<body>

<header class="t-header">
	<div class="head-tzone">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4 logo-tzone">
					<a class="logo" href="<?php bloginfo('url' ); ?>">
						<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="">
					</a>
				</div>
				<div class="col-xs-12 col-md-8 busca-redes">
					<div class="col-xs-12 col-md-6 redes">					
						<span class="tredes">Síguenos en: </span><a href="https://www.facebook.com/Travel-Zone-122124437856110/" class="cfacebook"><i class="face fa fa-facebook"></i></a>
					</div>
					<div class="col-xs-12 col-md-6 busca">
						<div class="search"><?php  get_search_form(); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fa-responsive">
		<div class="container">
	    	<div class="col-xs-12">
	    		<div class="resp">
	    			<div class="ititulo"><h2>Menu</h2></div>
	    			<div class="iconoresp">
						<a href="#" class="btn-menu" id="btn-menu">
							<i class="icono fa fa-bars"></i>
						</a>
					</div>
	    		</div>


	    	</div>
		</div>	    	
	</div>	
	<nav id="men">
		<div class="container">
			<div class="col-md-12">
				<div class="menucin" id="menucin">
					<div class="mini">
					<?php  showMenu(); ?> 
					</div>
				</div>
	    	</div>
	    </div>
	</nav>
</header>


