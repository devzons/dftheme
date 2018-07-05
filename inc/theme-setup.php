<?php

function dftheme_setup() {
	add_theme_support( 'menus' );

	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'post-formats', array( 'aside', 'chat', 'gallery', 'link', 'image', 'quote', 'status', 'video' ) );

	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'footer', 'Footer Navigation' );
}