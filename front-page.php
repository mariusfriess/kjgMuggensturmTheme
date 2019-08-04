<?php
get_header();
?>
<?php
  # Optional Front Page Popup
  if(get_theme_mod('popup_enable_setting') == 1){
    echo "<div class='front-page-popup'><span class='title'>" . get_theme_mod('popup_dateTitle_setting') . "</span><span class='date'>Nur noch ";
    $date = strtotime(get_theme_mod('popup_date_setting'));
    $datediff = round(($date - time()) / (60 * 60 * 24));
    echo $datediff;

    if($datediff == 1) {
      echo " Tag";
    }else {
      echo " Tage";
    }
    echo "</span></div>";
  }
?>
<div class="front-page-header <?php if(get_theme_mod('popup_enable_setting') == 1){echo 'popupActive';} ?>" style="background-image: url(<?php header_image(); ?>)">
  <div class="overlay"></div>
  <h1>Katholische Junge Gemeinde</h1>
  <h2>Muggensturm</h2>
</div>
<div class="front-page-header-skew"></div>
<div class="front-page-content">
  <div class="front-page-welcome">
    <h1>Willkommen&nbsp;bei&nbsp;der</h1>
    <span></span>
    <img class="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/kjg_Muggensturm.svg" alt="kjg logo"/>
    <div class="welcome-text">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/Lager2017Gesamtbild.jpg" alt="lager 2017">
      <p>Hallo und Herzlich Willkommen auf unserer Homepage!<br/>Hier möchten wir euch einen Einblick in unsere KjG-Aktionen und Jugendarbeit geben, die wir in unserer Pfarrei „Maria Königin der Engel“ über das Jahr betreiben. Es gibt aktuelle Informationen und geschichtliches. Aber schaut euch einfach selbst um.<br /><br />Eure KjG Muggensturm</p>
    </div>
  </div>
  <div class="front-page-section">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('firstSectionPicSetting'))?>" alt="section picture">
    <div class="section-content">
      <h1><?php echo get_theme_mod('firstSectionTitleSetting')?></h1>
      <p><?php echo get_theme_mod('firstSectionTextSetting')?></p>
      <div class="links">
        <?php 
          if(get_theme_mod('firstSectionBtn1Setting') != "")  {
            echo "<a href='http://" . get_theme_mod('firstSectionBtn1LinkSetting') . "' target='_blank'>" . get_theme_mod('firstSectionBtn1Setting') . "</a>";
          }
          if(get_theme_mod('firstSectionBtn2Setting') != "")  {
            echo "<a href='http://" . get_theme_mod('firstSectionBtn2LinkSetting') . "' target='_blank'>" . get_theme_mod('firstSectionBtn2Setting') . "</a>";
          }
          if(get_theme_mod('firstSectionBtn3Setting') != "")  {
            echo "<a href='http://" . get_theme_mod('firstSectionBtn3LinkSetting') . "' target='_blank'>" . get_theme_mod('firstSectionBtn3Setting') . "</a>";
          }
        ?>
      </div>
    </div>
  </div>
  <div class="front-page-section">
    <div class="section-content">
      <h1><?php echo get_theme_mod('secondSectionTitleSetting')?></h1>
      <p><?php echo get_theme_mod('secondSectionTextSetting')?></p>
      <div class="links">
        <?php 
          if(get_theme_mod('secondSectionBtn1Setting') != "")  {
            echo "<a href='http://" . get_theme_mod('secondSectionBtn1LinkSetting') . "' target='_blank'>" . get_theme_mod('secondSectionBtn1Setting') . "</a>";
          }
          if(get_theme_mod('secondSectionBtn2Setting') != "")  {
            echo "<a href='http://" . get_theme_mod('secondSectionBtn2LinkSetting') . "' target='_blank'>" . get_theme_mod('secondSectionBtn2Setting') . "</a>";
          }
          if(get_theme_mod('secondSectionBtn3Setting') != "")  {
            echo "<a href='http://" . get_theme_mod('secondSectionBtn3LinkSetting') . "' target='_blank'>" . get_theme_mod('secondSectionBtn3Setting') . "</a>";
          }
        ?>
      </div>
    </div>
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('secondSectionPicSetting'))?>" alt="section picture">
  </div>
</div>
<?php /*
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
*/ ?>
<?php
get_footer();
?>