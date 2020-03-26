<!doctype html>
<html class="showPopup" <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.materialdesignicons.com/5.0.45/css/materialdesignicons.min.css" rel="stylesheet">
  <meta name="google-site-verification" content="Y-N-3pc6VnbkJGINcb7sDXrh4PCcDv6NH0cddAcU7Wc" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- OLD POPUP CODE
  /*
  if(get_theme_mod('popup_enable_setting') == 1){

    if(get_theme_mod('popup_type_setting') == "text") {
      echo "<a href='" . get_theme_mod('popup_linkTo_setting') . "' class='front-page-popup'><span class='title'>" . get_theme_mod('popup_dateTitle_setting') . "</span><span class='date'>" . get_theme_mod('popup_text_setting') . "</span></a>";
    }

    else {
      echo "<a href='" . get_theme_mod('popup_linkTo_setting') . "' class='front-page-popup'><span class='title'>" . get_theme_mod('popup_dateTitle_setting') . "</span><span class='date'>Nur noch ";
      $date = strtotime(get_theme_mod('popup_date_setting'));
      $datediff = ceil(($date - time()) / (60 * 60 * 24));
      echo $datediff;

      if($datediff == 1) {
        echo " Tag";
      }else {
        echo " Tage";
      }
      echo "</span></a>";
    }
  }*/-->

  <?php 
    echo "<a href='" . get_theme_mod('popup_linkTo_setting') . "' class='front-page-popup'><p class='title'>Schwimmbadausflug & Gruppenstundenabsage</p></a>";
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
        <span class="mdi mdi-magnify"></span>
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
      <span class="mdi mdi-menu"></span>
    </button>
    <div class="mobile-nav-logo">
      <?php the_custom_logo(); ?>
    </div>
    <button id="mobile-search-box-btn" class="icon-btn">
      <span class="mdi mdi-magnify"></span>
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
        <span class="mdi mdi-close"></span>
      </button>
      Menu
    </h3>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
  </div>