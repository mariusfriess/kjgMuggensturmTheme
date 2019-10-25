<?php get_header(); ?>

<?php if (have_posts()) : ?> 
  <main class="search-template">
    <h1 class="search-title">Deine Suchergebnisse für: <strong><?php echo $s ?></strong></h1>
    <?php 
    $hasEvent = false;
    while(have_posts()) : the_post();
      if(get_post_type() == 'tribe_events') {
        $hasEvent = true;
      }
    endwhile;
    if($hasEvent == true) {
    ?>
    <div class="posts-wrapper event">
      <h2>Veranstaltungen</h2>
      <div class="inner-wrapper">
      <?php while (have_posts()) : the_post(); 
       if(get_post_type() == 'tribe_events') {
        ?>
        <div class="post-inner">
          <h3 class=title><?php the_title(); ?></h3>
          <span class="event-date">Datum: <?php echo tribe_get_start_date(null, false, 'd.m.Y'); ?></span>
          <span class="event-time">Uhrzeit: <?php echo tribe_get_start_date(null, false, 'h:i'); ?> Uhr</span>
        </div>
        <?php
      } endwhile;?>
      </div>
    </div>
    <?php }?>
    <?php 
    $hasPost = false;
    while(have_posts()) : the_post();
      if(get_post_type() == 'post') {
        $hasPost = true;
      }
    endwhile;
    if($hasPost == true) {
    ?>
    <div class="posts-wrapper post">
      <h2>Artikel</h2>
      <div class="inner-wrapper">
      <?php while (have_posts()) : the_post(); 
       if(get_post_type() == 'post') {
        ?>
        <div class="post-inner">
          <h3><?php the_title(); ?></h3>
          <span class="divider"></span>
          <?php the_excerpt(); ?>
          <div class="post-footer">
          <a href="<?php the_permalink() ?>">Weiter lesen</a>
            <span><?php echo get_the_date(); ?></span>
          </div>
        </div>
        <?php
      } endwhile;?>
      </div>
    </div>  
    <?php }?>
    <?php 
    $hasPage = false;
    while(have_posts()) : the_post();
      if(get_post_type() == 'page') {
        $hasPage = true;
      }
    endwhile;
    if($hasPage == true) {
    ?>
    <div class="posts-wrapper page">
      <h2>Seiten</h2>
      <?php while (have_posts()) : the_post(); 
       if(get_post_type() == 'page') {
        ?>
        <a href="<?php the_permalink() ?>"><?php echo the_title();?></a>
        <?php
      } endwhile;?>
    </div> 
    <?php }?>
  </main>

<?php else : ?>
    <h2>Leider nichts gefunden</h2>
  
<?php endif; ?>
 
<?php get_footer(); ?>