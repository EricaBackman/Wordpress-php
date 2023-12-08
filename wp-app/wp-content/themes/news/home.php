<?php get_header(); ?>
<main>
  <div class="blogg-container">
    <div class="blogg-header"><h1><?php single_post_title(); ?></h1>
  </div>

    <section class="blogg-content-container">
      <div class="post-container">
        <?php if(have_posts()):
          while(have_posts()):
            the_post(); ?>
              <article>
                <a class="header-link" href="<?= the_permalink(); ?>">
                <h1 class="post-title"><?php the_title(); ?></h1></a>
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
                <div class="post-p">
                <?php the_excerpt(); ?>
                </div>
              </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>
    <aside class="sidemenu-container">
        <?php get_sidebar(); ?>
    </aside>
    <div class="next-side">
      <?php echo
        paginate_links(
          array(
              'total' => $wp_query->max_num_pages,
              'prev_text'=> __('Previous'),
              'next_text'=> __('Next'),
            )
          );
          ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
