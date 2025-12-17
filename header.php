<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css?v=1" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/js-cookie@rc"></script>
  </head>
  <body <?php body_class(); ?>>
  <div class="accessibility-wrap">
      <div class="container">
        <div class="font-wrapper wcag-wrap">
          <div class="fonts">
            <ul class="font-list">
              <p>Czcionka:</p>
              <li>
                <a
                  href=""
                  class="wcag-font-size wcag-font-size-1"
                  title="Czcionka domyślna"
                >
                  <img
                    class="fontDefault"
                    src="<?php echo get_template_directory_uri(); ?>/images/font-icon.svg"
                    alt="Czcionka domyślna"
                  />
                  <img
                    class="fontDefault contrast"
                    src="<?php echo get_template_directory_uri(); ?>/images/font-icon.svg"
                    alt="Czcionka domyślna"
                  />
                </a>
              </li>
              <li>
                <a
                  href=""
                  class="wcag-font-size wcag-font-size-2"
                  title="Czcionka średnia"
                >
                  <img
                    class="fontDefault"
                    src="<?php echo get_template_directory_uri(); ?>/images/font-icon.svg"
                    alt="Czcionka średnia"
                  />
                  <img
                    class="fontDefault contrast"
                    src="<?php echo get_template_directory_uri(); ?>/images/font-icon.svg"
                    alt="Czcionka średnia"
                  />
                </a>
              </li>
              <li>
                <a
                  href=""
                  class="wcag-font-size wcag-font-size-3"
                  title="Czcionka duża"
                >
                  <img
                    class="fontDefault"
                    src="<?php echo get_template_directory_uri(); ?>/images/font-icon.svg"
                    alt="Czcionka duża"
                  />
                  <img
                    class="fontDefault contrast"
                    src="<?php echo get_template_directory_uri(); ?>/images/font-icon.svg"
                    alt="Czcionka duża"
                  />
                </a>
              </li>
              <li class="font-contrast">
                <p>Kontrast</p>
                <a class="contrast" id="contrast-btn-pc" title="Zmień kontrast">
                  <img
                    class="fontDefault"
                    src="<?php echo get_template_directory_uri(); ?>/images/contrast.png"
                    alt="Zmień kontrast"
                  />
                  <img
                    class="fontDefault contrast"
                    src="<?php echo get_template_directory_uri(); ?>/images/contrast.png"
                    alt="Zmień kontrast"
                  />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <nav id="nav">
      <div class="container nav-container">
        <div class="row">
          <div class="col col-10 col-lg-4">
            <a class="name-wrap" href="<?php echo home_url();?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logotyp_WC.png" alt="" />
            </a>
          </div>
          <div class="col col-2 col-lg-8">
            <?php wp_nav_menu(array(
              'theme_location' => 'main',
              'menu_class' => 'menu d-none d-lg-flex',
              'container' => '',
            )); ?>
            <div
              class="hamburger hamburger--spin d-inline-block d-lg-none"
              type="button"
            >
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div id="mySidenav" class="sidenav d-block d-lg-none">
        <div class="container">
          <div class="row">
            <div class="col col-10">
              <a class="name-wrap" href="<?php echo home_url();?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logotyp_WC.png" alt="" />
              </a>
            </div>
            <div class="col col-2">
              <div class="hamburger hamburger--spin" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </div>
            </div>
          </div>
          <div class="menu-bg-wrap">
            <?php wp_nav_menu(array(
              'theme_location' => 'main',
              'menu_class' => 'mobile-menu',
              'container' => '',
            )); ?>
          </div>
        </div>
      </div>
    </nav>