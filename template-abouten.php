<?php 
/*Template Name: About the project*/
get_header(); 
?>

<section class="about-header">
  <div class="container">
    <div class="title-wrap">
      <h1 class="title"><?php echo get_the_title(  ); ?></h1>
    </div>
    <div class="row">
      <div class="col col-12">
        <div class="text-wrap top">
          <p>
            This endeavor/venture is realized under
            <strong> the scholarship of the National Plan of Restoration and Increase of Immunity – Program supporting the work of cultural institutions and creative industries in order to stimulate their growth.</strong>
          </p>
        </div>
      </div>
      <div class="col col-12 col-md-6">
        <div class="img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/museum-blue.jpg" alt="" />
        </div>
      </div>
      <div class="col col-12 col-md-6">
        <div class="text-wrap objective">
          <p>
            <strong>Project title:</strong><br />
            Along the route/track of the EU migration museums – towards multicultural communities,
            where mobility is a fundamental right. Good practices and recommendations concerning
            social inclusion in receiving/admitting countries.
          </p>
        </div>
      </div>
      <div class="col col-12 col-md-6">
        <div class="text-wrap objective targets">
          <p>
            <strong>Project goals:</strong></p>
          <ul>
            <li>Introduction to good practices in EU countries, where migration museums and other
            cultural institutions promoting mobility and multiculturalism aim to create an offer
            inclusive of migrants (as recipients, creators, employees);</li>
            <li>Acquisition of knowledge and skills concerning the effective creation of an inclusive
            multicultural offer and its promotion by cultural institutions in select EU countries;</li>
            <li>Creation of a website showcasing good practices in the matters of an inclusive and
            multicultural offer of the aforementioned EU institutions.</li>
          </ul>
        </div>
      </div>
      <div class="col col-12 col-md-6">
        <div class="img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/museum-red.jpg" alt="" />
        </div>
      </div>
      <div class="col col-12 col-md-6">
        <div class="img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/museum-wood.jpg" alt="" />
        </div>
      </div>
      <div class="col col-12 col-md-6">
        <div class="text-wrap objective column">
          <p>
            <strong>Project scope:</strong></p>
            <ul>
              <li>Analysis of the actions/work of 10 selected EU cultural institutions;</li>
              <li>4 study visits to migrant museums in European Union countries that have experience
              in admitting/receiving/accepting migrants;</li>
              <li>Conducting online meetings with representatives of EU cultural institutions and
              people of cultural recognition;</li>
              <li>Conducting online meetings with researchers working in the fields of culture,
              integration, multiculturalism, migration and mobility;</li>
              <li>Organization of 2 online workshops summarizing the project, with its participants, in
              order to discuss selected good practices;</li>
              <li>Seminar summarizing the venture/endeavor promoting and disseminating the effects
              of the scholarship in communities interested in the subjects of mobility,
              multiculturalism, and social inclusion.</li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>