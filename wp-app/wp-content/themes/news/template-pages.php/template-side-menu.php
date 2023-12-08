<?php

/* Template Name: Side menu */

get_header(); ?>
<main>
<section>
    <div class="page-container">
      <?php if (have_posts()):
        while (have_posts()):
          the_post(); ?>
          <h1 class="page-title"><?php the_title(); ?></h1>
          <div class="page-content" ><?php the_content(); ?></div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="side-menu">
    <?php wp_nav_menu(
              array(
                'menu' => 'sidemenu',
                'header-container' => '',
                'theme_location' => 'sidemanu',
                'items_wrap' => '<ul id"" class="side-list">%3$s</ul>',
              ))
              ?>
    </div>
  </section>
</main>
  <?php get_footer(); ?>
