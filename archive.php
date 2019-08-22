<?php
get_header();
?>
<div class="page-title">
  <h1><?php echo single_cat_title()?></h1>
  <span class="seperator"></span>
</div>

<main class="home-template">
  <?php 
  if (have_posts() ) {
    while (have_posts() ) {
      the_post();
      ?>
        <div class="post">
          <h1><?php the_title(); ?></h1>
          <span class="divider"></span>
          <?php the_excerpt(); ?>
          <div class="post-footer">
          <a href="<?php the_permalink() ?>">Weiter lesen</a>
            <span><?php echo get_the_date(); ?></span>
          </div>
        </div>
      <?php
      }
    }else {
    ?>
      <p>There are no posts.
    <?php
    }?>
</main>
<?php
get_footer();
?>