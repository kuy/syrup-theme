<?php

function syrup_setup() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 120, 120 );
}
add_action( 'after_setup_theme', 'syrup_setup' );

function syrup_theme_scripts() {
    wp_enqueue_style( 'syrup-pure', get_stylesheet_directory_uri() . '/css/pure.css' );
	wp_enqueue_style( 'syrup-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'syrup_theme_scripts' );
