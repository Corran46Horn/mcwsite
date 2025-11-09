<?php get_header(); ?>
<section class="blog-posts">
  <div class="container">
    <div class="row">
      <?php 
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 8,
        );
        $query = new WP_Query( $args );
        if( $query->have_posts() ){ 
          while( $query->have_posts() ){
            $query->the_post();
            $post_ID = get_the_ID();
      ?>
      <div class="col col-12 col-lg-6">
        <a href="<?php the_permalink(); ?>" class="post-wrap">
          <?php
            if(has_post_thumbnail()){
              the_post_thumbnail();
            }else{
          ?>
            <img class="placeholder" src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg" alt="obrazek zastępczy - logo">
          <?php
            }
          ?>
          <div class="text-wrap">
            <p class="header"><?php echo the_title(); ?></p>
            <p><?php pll_e('read'); ?></p>
          </div>
        </a>
      </div>
      <?php
        }
        wp_reset_query();
      }
    ?>
    </div>
  </div>
</section>
<div class="container">
  <?php the_content(); ?>
</div>
<?php get_footer(); ?>