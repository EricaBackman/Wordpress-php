<?php get_header(); ?>
<main>
  <div class="blogg-container">
    <section class="blogg-content-container">
      <div class="post-container">
        <?php if(have_posts()):
          while(have_posts()):
            the_post(); ?>
              <article>
              <h1><?php single_post_title(); ?></h1>
                <img src="<?= the_post_thumbnail_url("large"); ?>" alt="blogg-image">
                <ul class="post-info">
                  <li>
                    <?php the_time("j, F, Y"); ?>
                  </li>
                  <li>
                    <?php the_author_posts_link(); ?>
                  </li>
                  <li>
                    <?php the_category(", "); ?>
                  </li>
                </ul>
                <p><?php the_content(); ?></p>
              </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>
    <aside class="sidemenu-container">
        <?php get_sidebar(); ?>
    </aside>
  </div>
</main>
<?php get_footer(); ?>
