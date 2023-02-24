<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <base href="<?php echo get_template_directory_uri(); ?>/">

  <title><?php echo wp_get_document_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description') ?>" />

  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="tg@gromov_ilia">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
  <!-- <link rel="stylesheet" href="css/base-styles.css" type="text/css"> -->
  <?php /*<meta property="fb:app_id" content="">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Ilia Gromov">
  <meta property="og:title" content="Ilia Gromov">
  <meta property="og:description" content="Frontend developer. Разработаю Вашу идею на профессиональном уровне!">
  <meta property="og:url" content="https://iliagromov.github.io/">
  <meta property="og:image" content="https://iliagromov.github.io/assets/img/img-about-2.jpg">
  <meta property="vk:image" content="https://iliagromov.github.io/assets/img/img-about-2-vk.jpg">
  <meta property="fb:image" content="https://iliagromov.github.io/assets/img/img-about-4.jpg">
  <meta property="twitter:image" content="https://iliagromov.github.io/assets/img/img-about-3.jpg">
  <meta property="og:image:secure_url" content="https://iliagromov.github.io/assets/img/img-about-2.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="500">
  <meta property="og:image:height" content="300">
  <meta property="twitter:card" content="summary">
  <meta property="twitter:site" content="https://iliagromov.github.io/">
  <meta property="twitter:description" content="">
  <meta property="twitter:creator" content="Ilia Gromov">*/ ?>
  <!-- <link rel="stylesheet" href="libs/css/swiper/swiper-bundle.min.css"> -->
  <!-- <script src="libs/js/swiper/swiper-bundle.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  
  <header class="header">
    <div class="wrapper">
      <div class="header-inner">
        <div class="header__logo">
          <a href="/"> 
            <img src="assets/images/png/logo.png" alt="">
          </a>
        </div>
        <div class="header__nav">
          <button class="header__nav-menu menu-btn"> </button>
          <?php wp_nav_custom_menu('headerNav'); ?>

        </div>
      </div>
    </div>
  </header>
  <div class="menu-nav">
    <?php wp_nav_custom_menu('menuNav'); ?>
    <?php socialWpNav('socialNav'); ?>
  </div>