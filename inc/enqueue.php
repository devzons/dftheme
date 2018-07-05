<?php

function dftheme_script_enqueue() {
	wp_enqueue_style( 'boot-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/dftheme.css', array(), microtime(), 'all');

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'boot-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true );
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/dftheme.js', array(), microtime(), true );	
}