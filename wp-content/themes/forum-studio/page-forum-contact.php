<?php /* Template Name: Forum Contact Us */ ?>

<?php get_header(); ?>
  

<div id="primary" class="content-area">
  
  <main id="main" class="site-main fs-main" role="main">
 
    <div class="fs-secondary__hero" style="background-image:url('<?php the_field('hero_header_image'); ?>');background-size: cover;"></div>
      
      <section class="fs-container fs-contact">

        <div class="fs-container__col-9">
         
         <h1 class="fs-h1"><?php the_title(); ?></h1>
         <h4 class="fs-h4"><?php the_field('contact_cities_subtitle'); ?></h4>
            
            <div class="fs-contact-list">
              <?php if(have_rows('cities_contact_list')) : while(have_rows('cities_contact_list')) : the_row(); 
              $contactCitiesTitle = get_sub_field('title');
              $contactCitiesList  = get_sub_field('info');
              ?>
                <article class="fs-contact-list__item">
                  <h5 class="fs-h5"><?php echo $contactCitiesTitle; ?></h5>
                    <div class="fs-contact-list__item--info"><?php echo $contactCitiesList; ?></div>
                </article>
              <?php endwhile; endif; ?>
                
            </div>

            <hr />

            <h4 class="fs-h4"><?php the_field('contact_market_subtitle'); ?></h4>
            <div class="fs-contact-list">
              <?php if(have_rows('markets_contact_list')) : while(have_rows('markets_contact_list')) : the_row(); 
              $contactMarketsTitle = get_sub_field('title');
              $contactMarketsList  = get_sub_field('info');
              $contactMarketsLink  = get_sub_field('link');
              ?>
                <article class="fs-contact-list__item">
                  <h5 class="fs-h5"><?php echo $contactMarketsTitle; ?></h5>
                    <div class="fs-contact-list__item--info"><?php echo $contactMarketsList; ?></div>
                    <div class="fs-contact-list__item--link"><?php echo $contactMarketsLink; ?></div>
                </article>
              <?php endwhile; endif; ?>
                
            </div>
          </div><!-- end col 8 -->
          
          <aside class="fs-container__col-3">
            <h5 class="fs-h5">CAREERS</h5>
             <?php if(have_rows('careers_information')) : while(have_rows('careers_information')) : the_row(); 
              $careersInfo  = get_sub_field('careers_info');
              $careersLink  = get_sub_field('careers_link');
              ?>

              <div><?php echo $careersInfo; ?></div>
              <div class="fs-link"><?php echo $careersLink; ?></div>
              <?php endwhile; endif; ?>
          </aside>
      </section>

  </main><!-- .site-main -->

  <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->




<?php get_sidebar(); ?>
<?php get_footer(); ?>

