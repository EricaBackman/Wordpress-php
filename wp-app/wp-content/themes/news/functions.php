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

function news_support() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'news_support');

// Assuming this is where you display your posts
while (have_posts()) : the_post();

  // Your post content goes here

  // Display the featured image
  if (has_post_thumbnail()) {
      echo '<img id="whatever" src="' . esc_url(get_the_post_thumbnail_url(null, 'full')) . '" alt="">';
  }

endwhile;

function news_menus(){
  $locations = array(
  'primary' => 'Navbar second'
  );

  register_nav_menus($locations);
}
add_action('init', 'news_menus' );

?>
