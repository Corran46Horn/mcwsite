<?php 
/*Template Name: Study visits*/
get_header(); 

?>

<section class="about-header">
  <div class="container">
    <div class="title-wrap">
      <h1 class="title"><?php echo get_the_title(  ); ?></h1>
    </div>
    <div class="row">
      <div class="col col-12">
        <div class="text-wrap top"></div>
      </div>
      <div class="col col-12 col-md-6">
        <div class="img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/KPOdef.png" alt="" />
        </div>
      </div>
      <div class="col col-12 col-md-6">
        <div class="text-wrap objective">
          <p>
            The project envisioned four study visits at migration museums of selected countries of the
            European Union, which realized activities in the promotion of multiculturalism, mobility, and
            the inclusion of migrants.
            <br /><br />
            Countries of the former/old “EU-15” developed an immigrant nature way before Poland.
            Many cultural institutions from these countries have a lot of experience on the subject of
            migration, multiculturalism, and social inclusion. Study visits allowed to become accustomed
            with the activities that these institutions carry out and their good practices, and to establish
            contacts and substantive cooperation.
            The visits took place in Berlin (Germany), Farum (Denmark), Rome (Italy), and Växjö
            (Sweden). Selected institutions differ from each other in terms of status, profile, and
            inception time. They are connected through the mission of being active in favor of the
            broadly defined term of social inclusion.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="blog-posts">
  <div class="container">
    <div class="row">
      <?php 
        $args = array(
          'post_type' => 'visits',
          'posts_per_page' => 8,
          'orderby' => 'title', 
          'order' => 'DESC',
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