<?php 

// SETUP


// INCLUDE
include( get_stylesheet_directory() . '/inc/enqueue.php' );
include( get_stylesheet_directory() . '/inc/walker.php' );
include( get_stylesheet_directory() . '/inc/theme-setup.php' );
include( get_stylesheet_directory() . '/inc/widgets-setup.php' );

// HOOKS
add_action( 'wp_enqueue_scripts', 'dftheme_script_enqueue');
add_action( 'init', 'dftheme_setup' );
add_action( 'widgets_init', 'dftheme_widget_setup' );

// SHORTCODES 