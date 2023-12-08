<?php

/* Template Name: Image page */

get_header(); ?>
<main>
  <section>
      <div class="image-page-container">
          <?php if(have_posts()):
            while(have_posts()):
              the_post(); ?>
              <h1 class="page-title"><?php the_title(); ?></h1>
          <div class="side-by-side">
                    <div class="image-page-content"><?php the_content(); ?>
                    </div>
                      <?php endwhile; ?>
                        <?php endif; ?>
                      
                          <div class="img">
                          <img id="side-image" src="<?php the_post_thumbnail_url("large") ?>" alt="">
                          </div>
          </div>
      </div>
  </section>
</main>
  <?php get_footer(); ?>
