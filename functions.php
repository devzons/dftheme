<?php 

// SETUP


// INCLUDE
include( get_stylesheet_directory() . '/inc/enqueue.php' );

// HOOKS
add_action( 'wp_enqueue_scripts', 'dftheme_script_enqueue');

// SHORTCODES