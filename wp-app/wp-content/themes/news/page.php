<!-- themplate for subsidesvexcept frontpage and home.php -->
<?php get_header(); ?>
<main>
  <section>
    <div class="page-container">
      <?php if(have_posts()):
        while(have_posts()):
          the_post(); ?>
          <h1 class="page-title"><?php the_title(); ?></h1>
          <div class="page-content"><?php the_content(); ?></div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
