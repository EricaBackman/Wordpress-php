<?php

function news_styles () {
  $version = wp_get_theme () -> get('Version');
  wp_enqueue_style('news-style',
  get_template_directory_uri() . "/style.css",
  array(), $version, 'all');
}

function news_scripts () {
  $version = wp_get_theme () -> get('Version');
  wp_enqueue_script('news-custom_script', get_template_directory_uri() . "/assets/js/scripts.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'news_styles');
add_action('wp_enqueue_scripts', 'news_scripts');


?>
