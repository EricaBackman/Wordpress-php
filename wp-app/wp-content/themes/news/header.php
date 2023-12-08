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
        <div class="menu-container"><?php wp_nav_menu(
          array(
            'menu' => 'navbar',
            'header-container' => '',
            'theme_location' => 'navbar',
            'items_wrap' => '<ul id"" class="nav-list">%3$s</ul>',
          )
        )
          ?>
        </div>
        <div class="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>
  </header>
