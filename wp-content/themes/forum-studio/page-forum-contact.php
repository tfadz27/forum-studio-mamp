<?php /* Template Name: Forum Contact Us */ ?>

<?php get_header(); ?>
  

<div id="primary" class="content-area">
  
  <main id="main" class="site-main fs-main" role="main">
 
    <div class="fs-secondary__hero" style="background-image:url('<?php the_field('hero_header_image'); ?>');background-size: cover;"></div>
      
      <section class="fs-main-with-sidebar">
         
         <h1 class="fs-h1"><?php the_title(); ?></h1>
            
            <div class="fs-contact-list">

              <?php if(have_rows('cities_contact_list')) : while(have_rows('cities_contact_list')) : the_row(); 
              $contactCitiesTitle = get_sub_field('title');
              $contactCitiesList  = get_sub_field('info');
              ?>
                <article class="fs-contact-list__city">
                  <h5 class="fs-h5"><?php echo $contactCitiesTitle; ?></h5>
                    <div class="fs-cities-list"><?php echo $contactCitiesList; ?></div>
                </article>
              <?php endwhile; endif; ?>
                
            </div>



            <div class="fs-contact-list">

              <?php if(have_rows('markets_contact_list')) : while(have_rows('markets_contact_list')) : the_row(); 
              $contactMarketsTitle = get_sub_field('title');
              $contactMarketsList  = get_sub_field('info');
              $contactMarketsLink  = get_sub_field('link');
              ?>
                <article class="fs-contact-list__city">
                  <h5 class="fs-h5"><?php echo $contactMarketsTitle; ?></h5>
                    <div class="fs-cities-list"><?php echo $contactMarketsList; ?></div>
                    <div class="fs-cities-link"><?php echo $contactMarketsLink; ?></div>
                </article>
              <?php endwhile; endif; ?>
                
            </div>

      </section>
  </main><!-- .site-main -->

  <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->




<?php get_sidebar(); ?>
<?php get_footer(); ?>

