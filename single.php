<?php
get_header();
?>
<main class="single-template">
  <?php if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      ?>
        <div class="the-post">
          <span class="post-info"><?php echo get_the_date(); ?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php the_author() ?></span>
          <?php the_content(); ?>
          <span class="seperator"></span>
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