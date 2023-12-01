
<!-- Template Name: Blogg-template -->

<?php get_header(); ?>
<section>
  <p>This is a template-page</p>
    <div class="post-container">
      <?php if (have_posts()):
        while (have_posts()):
          the_post(); ?>
          <h1 class="post-title"><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
  <?php get_footer(); ?>
