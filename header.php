<!doctype html>
<html class="showPopup" <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
  <meta name="google-site-verification" content="Y-N-3pc6VnbkJGINcb7sDXrh4PCcDv6NH0cddAcU7Wc" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- Info Bar <<dynamically inserted>> -->
  <?php 
    $infoBar = get_option('kjg_infoBar');
    if($infoBar['show'] == 'true') {
      echo "<a href=" . $infoBar['link'] . " class='front-page-popup'><p class='title'>" . $infoBar['titleFinal'] . "</p></a>";
    };
  ?>

  <!-- DESKTOP HEADER -->
  <header class="desktop-header">
    <div class="main-logo">
      <img class="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/kjg_Muggensturm.svg" alt="kjg logo"/>
    </div>
    <nav>
      <div class="nav-logo">
        <?php the_custom_logo(); ?>
      </div>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      <button id="desktop-search-box-btn" class="search-btn icon-btn">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
          <path fill="currentColor" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
        </svg>
      </button>
    </nav>
    <div id="desktop-search-box" class="search-box">
      <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input id="search-box-input" type="text" name="s" autocomplete="off" placeholder="Suchen nach ...">
      </form>
    </div>
  </header>

  <!-- MOBILE HEADER -->
  <header class="mobile-header">
    <button id="mobile-nav-open-btn" class="icon-btn" type="button">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24">
        <path fill="currentColor" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
      </svg>
    </button>
    <div class="mobile-nav-logo">
      <?php the_custom_logo(); ?>
    </div>
    <button id="mobile-search-box-btn" class="icon-btn">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24">
        <path fill="currentColor" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
      </svg>
    </button>
    <div id="mobile-search-box" class="search-box">
      <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input id="search-box-input" type="text" name="s" autocomplete="off" placeholder="Suchen nach ...">
      </form>
    </div>
  </header>

  <!-- MOBILE NAV -->
  <div id="mobile-nav" class="mobile-nav">
    <h3>
      <button id="mobile-nav-close-btn" class="icon-btn">
        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
          <path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
        </svg>
      </button>
      Menu
    </h3>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
  </div>