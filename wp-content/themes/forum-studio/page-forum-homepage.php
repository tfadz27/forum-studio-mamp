<?php /* Template Name: Forum Homepage */ ?>

<?php get_header(); ?>
  

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    

    <!-- Slider -->
    <section class="fs-home-hero">
      <main class="fs-slider">
        <?php if(have_rows('slider')) : while(have_rows('slider')) : the_row(); 
            $sliderImage = get_sub_field('slider_image');
            $sliderTitle = get_sub_field('slider_title');
          ?>
        <div>
         <div class="fs-slide" style="background:url(<?php echo $sliderImage['url']; ?>) no-repeat;background-size: cover;">
            <h2 class="fs-slide__title"> <?php echo $sliderTitle; ?> </h2>
         </div>
        </div>
       <?php endwhile; endif; ?>
      </main>
    </section>
    
     <!-- Boiler -->
    <h3 class="fs-home-boiler"><?php the_field('home_boiler'); ?></h3>

    <!-- Social Stream -->
    <?php the_field('social_stream'); ?>
    
    
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

      // Include the page content template.
      get_template_part( 'template-parts/content', 'page' );

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      }

      // End of the loop.
    endwhile;
    ?>

  </main><!-- .site-main -->

  <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->


 <script type="text/javascript">
    jQuery(function($) {
       $('.fs-slider').slick({
      dots: true,
      autoplay: true,
      infinite: true,
      speed: 500,
      fade: true,
      arrows: true,
      responsive: true,
      cssEase: 'linear'
    });
  });


  </script>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

