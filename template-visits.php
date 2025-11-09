<?php 
/*Template Name: Wizyty Studyjne*/
get_header(); 

?>
<div class="title-wrap">
  <h1 class="title"><?php echo get_the_title(  ); ?></h1>
</div>
<section class="about-header">
  <div class="container">
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
            Projekt przewidywał cztery wizyty studyjne w muzeach migracji
            wybranych państw Unii Europejskiej, realizujących działania z
            zakresu promocji wielokulturowości, mobilności oraz inkluzji
            migrantów i migrantek.
            <br /><br />
            Kraje dawnej "Piętnastki" dużo wcześniej niż Polska zyskały
            imigracyjny charakter. Wiele instytucji kultury z tych państw ma
            duże doświadczenie w zakresie tematyki migracyjnej,
            wielokulturowości oraz inkluzji społecznej. Wizyty studyjne
            pozwoliły zaznajomić się z prowadzonymi przez te podmioty
            działaniami, poznać ich dobre praktyki, nawiązać kontakty oraz
            współpracę merytoryczną. Wizyty odbyły się w Danii, Niemczech,
            Szwecji i we Włoszech.
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
            <p>czytaj dalej</p>
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