<?php get_header(); ?>
<section class="page-section">
  <div class="container">
  <div class="title-wrap">
    <h1 class="title"><?php echo get_the_title(  ); ?></h1>
  </div>
    <?php the_content(); ?>
  </div>
</section>
<?php get_footer(); ?>