<?php

function dftheme_script_enqueue() {
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/dftheme.css', array(), microtime(), 'all');
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/dftheme.js', array(), microtime(), true );
}