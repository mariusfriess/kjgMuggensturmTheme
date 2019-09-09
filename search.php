<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <h1 class="search-title">Deine Suchergebnisse für: <strong><?php echo $s ?></strong></h1>
 
  <main class="home-template">  
    <?php while (have_posts()) : the_post(); ?>
      <div class="post">
        <h1><?php the_title(); ?></h1>
        <span class="divider"></span>
        <?php the_excerpt(); ?>
        <div class="post-footer">
        <a href="<?php the_permalink() ?>">Weiter lesen</a>
          <span><?php echo get_the_date(); ?></span>
        </div>
      </div>
    <?php endwhile; ?>
  </main>

<?php else : ?>
    <h2>Leider nichts gefunden</h2>
  
<?php endif; ?>
 
<?php get_footer(); ?>