<?php
get_header();
?>
<div class="page-title">
  <h1><?php echo the_title("")?></h1>
  <!--<span class="seperator"></span>-->
</div>
<div class="page-template-content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="the-post">
      <?php the_content(); ?>
    </div>
  <?php endwhile; endif; ?>
</div>
<?php
get_footer();
?>