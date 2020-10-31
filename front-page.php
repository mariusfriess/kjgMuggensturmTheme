<?php
get_header();
?>

<div class="front-page">

  <div class="head">
    <div class="head-bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/ZeltplatzHeader.jpg)"></div>
    <div class="overlay"></div>
    <div class="title">
      <h1>Katholische junge Gemeinde <br />Muggensturm</h1>
    </div>
  </div>

  <div class="welcome">
    <h2>Herzlich <span>Willkommen</span></h2>
    <p>
    <span class="indicator"></span>
    Auf unserer Homepage möchten wir euch einen Einblick in unsere KjG-Aktionen und Jugendarbeit geben, die wir in unserer Pfarrei „Maria Königin der Engel“ über das Jahr betreiben. Ihr findet hier immer aktuelle Informationen und auch geschichtliches über die Katholische junge Gemeinde, aber am besten schaut Ihr euch einfach selbst um.
    </p>
  </div>

  <div style="display: none !important" class="welcome-box">
    <h2>Herzlich Willkommen</h2>
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/Lager2017Gesamtbild.jpg" alt="lager 2017">
    <p>
    Hallo und Herzlich Willkommen auf unserer Homepage! <br />
    Hier möchten wir euch einen Einblick in unsere KjG-Aktionen und Jugendarbeit geben, die wir in unserer Pfarrei „Maria Königin der Engel“ über das Jahr betreiben. Es gibt aktuelle Informationen und geschichtliches. Aber schaut euch einfach selbst um.
    </p>
  </div>

  <section class="article">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('firstSectionPicSetting'))?>" alt="section picture">
    <div class="section-content">
      <h3><?php echo get_theme_mod('firstSectionTitleSetting')?></h3>
      <p><?php echo get_theme_mod('firstSectionTextSetting')?></p>
      <div class="links">
        <?php 
          if(get_theme_mod('firstSectionBtn1Setting') != "")  {
            echo "<a class='front-page-button' href='http://" . get_theme_mod('firstSectionBtn1LinkSetting') . "' target='_blank'>" . get_theme_mod('firstSectionBtn1Setting') . "<svg style='max-width:20px;height:20px' viewBox='0 0 24 24'><path fill='currentColor' d='M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z' /></svg></a>";
          }
          if(get_theme_mod('firstSectionBtn2Setting') != "")  {
            echo "<a class='front-page-button' href='http://" . get_theme_mod('firstSectionBtn2LinkSetting') . "' target='_blank'>" . get_theme_mod('firstSectionBtn2Setting') . "<svg style='max-width:20px;height:20px' viewBox='0 0 24 24'><path fill='currentColor' d='M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z' /></svg></a>";
          }
          if(get_theme_mod('firstSectionBtn3Setting') != "")  {
            echo "<a class='front-page-button' href='http://" . get_theme_mod('firstSectionBtn3LinkSetting') . "' target='_blank'>" . get_theme_mod('firstSectionBtn3Setting') . "<svg style='max-width:20px;height:20px' viewBox='0 0 24 24'><path fill='currentColor' d='M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z' /></svg></a>";
          }
        ?>
      </div>
    </div>
    <div class="abgesagt">
      abgesagt
    </div>
  </section>

  <section class="article">
    <div class="section-content">
      <h3><?php echo get_theme_mod('secondSectionTitleSetting')?></h3>
      <p><?php echo get_theme_mod('secondSectionTextSetting')?></p>
      <div class="links">
        <?php 
          if(get_theme_mod('secondSectionBtn1Setting') != "")  {
            echo "<a class='front-page-button' href='http://" . get_theme_mod('secondSectionBtn1LinkSetting') . "' target='_blank'>" . get_theme_mod('secondSectionBtn1Setting') . "<svg style='max-width:20px;height:20px' viewBox='0 0 24 24'><path fill='currentColor' d='M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z' /></svg></a>";
          }
          if(get_theme_mod('secondSectionBtn2Setting') != "")  {
            echo "<a class='front-page-button' href='http://" . get_theme_mod('secondSectionBtn2LinkSetting') . "' target='_blank'>" . get_theme_mod('secondSectionBtn2Setting') . "<svg style='max-width:20px;height:20px' viewBox='0 0 24 24'><path fill='currentColor' d='M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z' /></svg></a>";
          }
          if(get_theme_mod('secondSectionBtn3Setting') != "")  {
            echo "<a class='front-page-button' href='http://" . get_theme_mod('secondSectionBtn3LinkSetting') . "' target='_blank'>" . get_theme_mod('secondSectionBtn3Setting') . "<svg style='max-width:20px;height:20px' viewBox='0 0 24 24'><path fill='currentColor' d='M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z' /></svg></a>";
          }
        ?>
      </div>
    </div>
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('secondSectionPicSetting'))?>" alt="section picture">
  </section>

  <section class="news">
    <h3>Aktuelle <span>Nachrichten</span></h3>
    <div class="posts-wrapper">
      <?php 
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page'=> 3,
          'order'=>'DESC',
          'orderby'=>'date',
          );
        $the_query = new WP_Query( $args );

        while ($the_query -> have_posts()) : $the_query -> the_post();
      ?>
      <a class="post" href="<?php the_permalink() ?>">
        <span class="date"><?php echo get_the_date('j. M, Y'); ?></span>
        <h1><?php the_title(); ?></h1>
        <?php the_excerpt(); ?>
        <span class="readMore" href="<?php the_permalink() ?>">Weiter lesen 
          <svg style="width:20px;height:20px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
          </svg>
        </span>
      </a>
      <?php 
        endwhile;
        wp_reset_postdata();
      ?>
    </div>
    <a class="show-more front-page-button" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Weitere KjG News
      <svg style="max-width:20px;height:20px" viewBox="0 0 24 24">
        <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
      </svg>
    </a>
  </section>

  <section class="gl">
    <h3 class="title">Unsere <span>Gruppenleiter</span></h3>
    <div class="content-wrapper">
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/gruppenleiter/HannahSoelter.jpg" alt="gruppenleiter portrait"><span>Hannah</span></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/gruppenleiter/DavidSpaeth.jpg" alt="gruppenleiter portrait"><span>David</span></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/gruppenleiter/NinaStroehm.jpg" alt="gruppenleiter portrait"><span>Nina</span></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/gruppenleiter/NoahKoelmel.jpg" alt="gruppenleiter portrait"><span>Noah</span></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/gruppenleiter/RafaellaSchiano.jpg" alt="gruppenleiter portrait"><span>Rafaella</span></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/gruppenleiter/FerdinandFeurer.jpg" alt="gruppenleiter portrait"><span>Ferdi</span></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/gruppenleiter/KimGastl.jpg" alt="gruppenleiter portrait"><span>Kim</span></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/gruppenleiter/JustinWeber.jpg" alt="gruppenleiter portrait"><span>Justin</span></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/gruppenleiter/FabioRahner.png" alt="gruppenleiter portrait"><span>Fabio</span></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/gruppenleiter/NadineMoser.jpg" alt="gruppenleiter portrait"><span>Nadine</span></div>
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/gruppenleiter/NicolasSpaeth.jpg" alt="gruppenleiter portrait"><span>Nicolas</span></div>
    </div>
  </section>

</div>

<?php
get_footer();
?>
