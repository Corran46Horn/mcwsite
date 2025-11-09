<?php get_header(); ?>
<section class="single-section">
<div class="container">
  <h1 class="title single-title" style="margin-bottom:40px;"><?php echo get_the_title(  ); ?></h1>
  <?php the_content(); ?>
</div>
</section>
<?php get_footer(); ?>