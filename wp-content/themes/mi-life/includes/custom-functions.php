<?php

function scripts_and_styles() {
   //only effect front-end of your website
	if (!is_admin() && $_SERVER['SCRIPT_NAME'] != '/wp-login.php') {
	
		// de and re register jquery
		wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    
    wp_register_style( 'critstyles', get_stylesheet_directory_uri() . '/library/css/critical.css', array(), '', 'all' );
		wp_register_style( 'stylesheet', get_stylesheet_directory_uri() . '/library/css/style.css', array(), '', 'all' );
		wp_register_style( 'fontload', get_stylesheet_directory_uri() . '/library/font/font.css', array(), '', 'all' );
		wp_register_style( 'fontosload', get_stylesheet_directory_uri() . '/library/font/font-os.css', array(), '', 'all' );
		wp_register_style( 'respgrid', get_template_directory_uri() . '/library/css/foundation.css', array(), 'all' );
		wp_register_style( 'overlaystyle', get_template_directory_uri() . '/library/source/jquery.fancybox.css', array(), 'all' );
    
    wp_register_script( 'respondjs', get_stylesheet_directory_uri() . '/library/js/libs/min/respond.min.js', array(), null, false );
		wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/library/js/libs/modernizr.custom.min.js', array(), '2.5.3', false );
		wp_register_script( 'overlayscript', get_stylesheet_directory_uri() . '/library/source/jquery.fancybox.js', array(), null, false );
		wp_register_script( 'helper', get_stylesheet_directory_uri() . '/library/source/helpers/jquery.fancybox-media.js', array(), null, false );
		wp_register_script( 'scrollto', get_stylesheet_directory_uri() . '/library/js/libs/jquery-scrollto.js', array(), null, false );
		wp_register_script( 'allscripts', get_stylesheet_directory_uri() . '/library/js/scripts.js', array(), null, true );
		
		wp_enqueue_style( 'critstyles' );
		wp_enqueue_style( 'stylesheet' );
		wp_enqueue_style( 'fontload' );
		wp_enqueue_style( 'fontosload' );
		wp_enqueue_style( 'respgrid' );
		wp_enqueue_style( 'overlaystyle' );
		
		wp_enqueue_script( 'respondjs' );
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'overlayscript' );
		wp_enqueue_script( 'helper' );
		wp_enqueue_script( 'scrollto' );
		wp_enqueue_script( 'allscripts' );
		
	}
}

// enqueue base scripts and styles
add_action('wp_enqueue_scripts', 'scripts_and_styles', 999);

// hide Admin Bar
show_admin_bar( false );