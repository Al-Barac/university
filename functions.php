<?php

function university_scripts() {

  wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style( 'style', get_stylesheet_uri(), NULL, microtime() );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts-bundled.js', array(), microtime(), true);
 
}
add_action( 'wp_enqueue_scripts', 'university_scripts' ); 

function university_features() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'university_features');

