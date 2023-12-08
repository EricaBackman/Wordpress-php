<!-- Frontpage -->
<?php get_header(); ?>
<main>
  <div class="hero-container">
    <div class="wide-wrapper">
      <div class="hero-image-wrapper">
            <img id="hero-image" class="hero-m" src="<?php the_post_thumbnail_url("medium")?>" alt="">
            <img id="hero-image" class="hero-l" src="<?php the_post_thumbnail_url("large")?>" alt="">
      </div>
      <div class="time-frontpage">
        <h1><?php the_title() ?></h1>
      </div>
    </div>
    <div class="greeting">
      <?php the_content() ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
