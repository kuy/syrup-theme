<?php

function syrup_theme_scripts() {
    wp_enqueue_style( 'syrup-pure', get_stylesheet_directory_uri() . '/css/pure.css' );
	wp_enqueue_style( 'syrup-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'syrup_theme_scripts' );
