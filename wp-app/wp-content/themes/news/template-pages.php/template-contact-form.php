<?php

/* Template Name: Contact form */

get_header(); ?>
<main>
<section class="form">
    <div class="page-container">
      <h1 class="page-title"><?php single_post_title(); ?></h1>
        <?php
          echo do_shortcode('[contact-form-7 id="6146788" title="Contact form 1"]');
        ?>
    </div>
  </section>
</main>
  <?php get_footer(); ?>
