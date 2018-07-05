<?php

function dftheme_setup() {
	// Menus
	add_theme_support( 'menus' );
	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'footer', 'Footer Navigation' );

	// theme support
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'post-thumbnails' );

	// post formats
	add_theme_support( 'post-formats', array( 'aside', 'chat', 'gallery', 'link', 'image', 'quote', 'status', 'video' ) );
	
}

