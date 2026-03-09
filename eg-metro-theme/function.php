<?php 
function eg_metro_theme_enqueue_styles() {
	wp_enqueue_style('eg-metro-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'eg_metro_theme_enqueue_styles');

function eg_metro_theme_setup() {
	add_theme_support('title-tag'); // Enable dynamic title 
	add_theme_support('post-thumbnails'); // Enable featured images
	add_theme_support('custom-logo'); // Enable custom logo
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'eg-metro-theme'),
	));
}
add_action('after_setup_theme', 'eg_metro_theme_setup');



?>
