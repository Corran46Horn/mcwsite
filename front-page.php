
<?php get_header(); ?>
<div class="container">
  <?php the_content(); ?>
</div>
<section class="blog-posts posters">
  <div class="container">
    <div class="row">
      <div class="col col-12 col-lg-6">
        <a href="https://www.klubmil.pl/" class="site-wrap kmil" target="_blank">
          <img class="placeholder" src="<?php echo get_template_directory_uri(); ?>/images/logoklub.png" alt="logo Klub Muzyki i Literatury we Wrocławiu">
          <div class="text-wrap">
            <p class="header">Klub Muzyki i Literatury we Wrocławiu</p>
          </div>
        </a>
      </div>
      <div class="col col-12 col-lg-6">
        <a href="https://biblioteka.wroc.pl" class="site-wrap lib" target="_blank">
          <img class="placeholder" src="<?php echo get_template_directory_uri(); ?>/images/biblioteka.svg" alt="logo Miejska Biblioteka Publiczna im. Tadeusza Różewicza we Wrocławiu">
          <div class="text-wrap">
            <p class="header">Miejska Biblioteka Publiczna im. Tadeusza Różewicza we Wrocławiu</p>
          </div>
        </a>
      </div>
      <div class="col col-12 col-lg-6">
        <a href="https://literatura.wroclaw.pl" class="site-wrap lit" target="_blank">
          <img class="placeholder" src="<?php echo get_template_directory_uri(); ?>/images/literatura.png" alt="logo Wrocławski dom literatury">
          <div class="text-wrap">
            <p class="header">Wrocławski dom literatury</p>
          </div>
        </a>
      </div>
      <div class="col col-12 col-lg-6">
        <a href="http://wroclawczyta.pl/aktualnosci/" class="site-wrap read">
          <div class="text-wrap">
            <!-- <p class="header">Wrocław czyta</p> -->
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>