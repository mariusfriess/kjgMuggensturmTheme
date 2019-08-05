<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="site-header">
    <div class="logo-wrapper">
      <?php if ( has_custom_logo() ) : ?>
        <div class="site-logo"><?php the_custom_logo(); ?></div>
      <?php endif; ?>
    </div>
    <nav>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
    <button id="mobileNavBtn" class="hamburger hamburger--spin" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </header>
  <?php if(!is_front_page()){
    ?>
    <div class="page-title">
      <h1><?php echo wp_title("")?></h1>
      <span class="seperator"></span>
    </div>
    <?php
  }?>