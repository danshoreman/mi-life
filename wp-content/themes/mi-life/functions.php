<?php

// Add custom functions
require_once( 'includes/custom-functions.php' ); 

// Add theme support woocommerce
add_theme_support( 'woocommerce' );

// Add theme support woocommerce
add_theme_support( 'widgets' );

// Add theme support post thumbnails
add_theme_support('post-thumbnails');

// Add post format support
add_theme_support( 'post-formats',
	array(
		'aside',             // title less blurb
		'gallery',           // gallery of images
		'link',              // quick link to other site
		'image',             // an image
		'quote',             // a quick quote
		'status',            // a Facebook like status update
		'video',             // video
		'audio',             // audio
		'chat'               // chat transcript
	)
);

// WP menus
add_theme_support( 'menus' );


// Add image sizes
add_image_size( 'thumbnail', 200, 200, true );
add_image_size( 'image', 700, 350, true );


// Register our sidebars and widgetized areas.
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'main-sidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


// Change default excerpt
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );