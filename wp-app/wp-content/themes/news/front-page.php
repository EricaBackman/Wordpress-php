<?php get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="wrapper">
      <?php if (have_posts()):
        while (have_posts()):
          the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
