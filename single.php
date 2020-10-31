<?php
get_header();
?>
<div class="page-title">
  <h1><?php echo the_title("")?></h1>
  <span class="seperator"></span>
</div>
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
    }
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
    ?>
    </main>
<?php
get_footer();
?>