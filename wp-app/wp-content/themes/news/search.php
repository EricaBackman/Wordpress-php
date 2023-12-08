<?php get_header(); ?>
<main>
  <section>
    <div class="post-container">
      <?php if(have_posts()):
        while(have_posts()):
          the_post(); ?>
          <h1 class="post-title"><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
  <div>
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
</main>
<?php get_footer(); ?>
