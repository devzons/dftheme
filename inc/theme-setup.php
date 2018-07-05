<?php

function dftheme_setup() {
	add_theme_support( 'menus' );

	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'footer', 'Footer Navigation' );
}