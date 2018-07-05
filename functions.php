<?php 

// SETUP


// INCLUDE
include( get_stylesheet_directory() . '/inc/enqueue.php' );
include( get_stylesheet_directory() . '/inc/theme-setup.php' );

// HOOKS
add_action( 'wp_enqueue_scripts', 'dftheme_script_enqueue');
add_action( 'init', 'dftheme_setup' );

// SHORTCODES