<!-- Frontpage -->
<?php get_header(); ?>
<main>
  <section class="hero-container">
    <img src="<?php the_post_thumbnail_url("large")?>" alt="">
  </section>
  <section class="time-frontpage">
    <h1><?php the_title() ?></h1>
   <?php echo (date("l")) . " " . (date("Y/m/d")) . " " . date("H:i"); ?>
  </section>
  <section class="greeting">
   <div class="front-content">
    <?php the_content() ?>
   </div>
  </section>
</main>
<?php get_footer(); ?>
