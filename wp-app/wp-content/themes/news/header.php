<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LifeNews</title>
  <?php
  wp_head();
  ?>
</head>
<body>
  <header>
  <div class="header-container">
    <nav class="nav-bar">
    <a href="#" class="nav-logo">L.N.</a>
    <div class="menu-container"><?php wp_nav_menu (
        array(
          'menu' => 'primary',
          'header-container' => '',
          'theme_location' => 'primary',
          'items_wrap' => '<ul id"" class="nav-list">%3$s</ul>',
        )
      )
      ?>
    <!-- <ul class="nav-list">
      <li class="nav-li"><a href="#" class="nav-link">Home</a></li>
      <li class="nav-li"><a href="/wp-content/themes/news/static/about.html" class="nav-link">About</a></li>
      <li class="nav-li"><a href="/wp-content/themes/news/static/contact.html" class="nav-link">Contact</a></li>
    </ul> -->
    </div>
    <div class="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
</div>
  </header>
