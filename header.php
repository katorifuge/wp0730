<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="フーランス特化型プログラミングスクール「COACHTECH]を運営している株式会社estraのコーポレートサイト">
  <meta name="robots" content="noindex">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.svg">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Estra,inc.</title>
  <link rel ="canonical" lref="http://ocalhost/wp05/">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/estra_logo.png" alt=""></a>
    </div>
    <nav class="header__nav">
      <ul class="header__nav-list flex__item">
        <li>
          <a href="<?php echo get_post_type_archive_link('news'); ?>" class="header__nav-list-link">News</a>
        </li>
        <li>
          <a href="#" class="header__nav-list-link">About</a>
        </li>
        <li>
          <a href="#" class="header__nav-list-link">Service</a>
        </li>
        <li>
          <a href="<?php echo get_category_link(2); ?>" class="header__nav-list-link">Blog</a>
        </li>
        <li>
          <a href="#" class="header__nav-list-link">Company</a>
        </li>
        <li>
          <a href="<?php echo home_url("contact"); ?> " class=" header__nav-list-link">Contact</a>
        </li>
      </ul>
    </nav>
    <!----- spv nav ----->
    <div class="spmenu">
      <nav class="global-nav">
        <ul class="global-nav__list">
          <li>
            <a href="<?php echo get_post_type_archive_link('news'); ?>" class="global-nav__item">News</a>
          </li>
          <li>
            <a href="#" class="global-nav__item">About</a>
          </li>
          <li>
            <a href="#" class="global-nav__item">Service</a>
          </li>
          <li>
            <a href="<?php echo get_category_link(2); ?>" class="global-nav__item">Blog</a>
          </li>
          <li>
            <a href="#" class="global-nav__item">Company</a>
          </li>
          <li>
            <a href="<?php echo home_url("contact"); ?> " class=" global-nav__item">Contact</a>
          </li>
        </ul>
      </nav>
      <div class="hamburger" id="js-hamburger">
        <span class="hamburger__line hamburger__line--1"></span>
        <span class="hamburger__line hamburger__line--2"></span>
        <span class="hamburger__line hamburger__line--3"></span>

      </div>
    </div>
    <div class="black-bg" id="js-black-bg"></div>

  </header>