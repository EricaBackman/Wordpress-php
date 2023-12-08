<?php
//CSS
function news_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('news-style',
        get_template_directory_uri()."/style.css",
        array(), $version, 'all');
}

//scripts
function news_scripts() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('news-custom_script', get_template_directory_uri()."/assets/js/scripts.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'news_styles');
add_action('wp_enqueue_scripts', 'news_scripts');

//Support and check for images in posts
function news_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'news_support');

// Assuming this is where you display your posts
// while (have_posts()) : the_post();

//   // Your post content goes here

//   // Display the featured image
//   if (has_post_thumbnail()) {
//       echo '<img id="whatever" src="' . esc_url(get_the_post_thumbnail_url(null, 'full')) . '" alt="">';
//   }

// endwhile;

//menus
function news_menus() {
    $locations = array(
        'navbar' => 'navbar',
        'sidemenu' => 'sidemenu'
    );

    register_nav_menus($locations);
}
add_action('init', 'news_menus');


//items per page/paginate

// function items_per_page($query) {
//   $query->set('posts_per_page', 1);
// }

// add_action('pre_get_posts','items_per_page');

function news_register_sidebar() {
  register_sidebar (
    array(
      'name' => 'adress-widget',
      'id' => 'adress-widget',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>'
    ));

    register_sidebar (
      array(
      'name' => 'about-widget',
      'id' => 'about-widget',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>'
      ));

      register_sidebar (
      array(
      'name' => 'social-widget',
      'id' => 'social-widget',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>'
      ));
}

add_action('widgets_init', 'news_register_sidebar');

?>
