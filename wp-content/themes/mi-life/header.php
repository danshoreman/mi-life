<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title><?php wp_title('Dorset Accessible Home Service'); ?></title>

<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
<!--[if IE]>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->
<?php // set /favicon.ico for IE10 win ?>
<meta name="msapplication-TileColor" content="#d3492f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>

<!--[if lt IE 9]>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
<![endif]-->

</head>
<body <?php body_class(); ?>>
<a id="top-anchor"></a>

<div class="header-wrap">
	<div class="row">
		<div class="small-12 columns">
			<header class="page-header">
				<a href="<?php echo home_url(); ?>" rel="nofollow" class="main-logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/general/dorset-accessible-home-service.png" class="" alt="">
				</a>
				<div id="toggle">Menu<span></span></div>
				<div class="contact-wrap">
					<p class="contact-info">For further information<br>
					Call <span class="strong">0800 130 0011</span></p>
					<p class="font-changer"><span class="js-font-decrease">A</span> <span class="js-font-normal">A</span> <span class="js-font-increase">A</span></p>
					<p id="fontSize"></p>
				</div>
				<?php wp_nav_menu( array( 'menu' => 'Main Menu', 'container_class' => 'main-menu' ) ); ?>
			</header>
		</div>
	</div>
</div>