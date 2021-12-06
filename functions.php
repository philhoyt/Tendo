<?php
if ( ! function_exists( 'tendo_setup' ) ) :

    function tendo_setup() {

        add_theme_support( 'automatic-feed-links' );
 
        add_theme_support( 'post-thumbnails' );
 
        add_theme_support( 'editor-styles' );
		add_editor_style( 'style.css' );
 
        add_theme_support( 'wp-block-styles' );
    }
endif;
add_action( 'after_setup_theme', 'tendo_setup' );
 
function tendo_scripts() {
    wp_enqueue_style( 'tendo-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'tendo_scripts' );

add_filter( 'excerpt_length', function( $length ) { return 20; } );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
