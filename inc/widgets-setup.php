<?php

// Sidebar function
function dftheme_widget_setup() {

	register_sidebar( array(
		'name' 			=> 'Sidebar',
		'id' 			=> 'sidebar-1',
		'class' 		=> 'custom',
		'description' 	=> 'Standard Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</aside>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	) );

	register_sidebar( array(
		'name' 			=> 'Shop Sidebar',
		'id' 			=> 'sidebar-2',
		'class' 		=> 'custom',
		'description' 	=> 'Shop Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</aside>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	) );
}