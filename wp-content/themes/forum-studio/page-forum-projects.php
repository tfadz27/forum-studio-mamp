<?php /* Template Name: Forum Projects */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main fs-main" role="main">

    <!-- Slideshow -->
    <section class="fs-slider__projects">
        <?php if(have_rows('project_slider')) : while(have_rows('project_slider')) : the_row(); 
            $projectImage = get_sub_field('image');
          ?>
        <div>
         <div class="fs-slide" style="background:url(<?php echo $projectImage['url']; ?>) no-repeat;background-size: cover;">
         </div>
        </div>
       <?php endwhile; endif; ?>
    </section>
    <!-- end slideshow -->


    <section class="fs-container">
    <!-- Projects Intro -->
    <h3 class="fs-projects-intro"><?php the_field('projects_intro'); ?></h3>

    <!-- Start Projects List -->
      <?php $recentPosts = new WP_Query(array('posts_per_page' => -1, 'post_type' => array('projects') ));
          while( $recentPosts->have_posts() ) :  $recentPosts->the_post();  ?>

      <div class="fs-wrapper">

          <!-- Project image thumbnail -->
          <div class="fs-project-thumb">
            <a href="<?php the_permalink(); ?>">
              <?php 
                $image = get_field('featured_thumbnail');
                if( !empty($image) ): ?>
                <img class="fs-project-thumb__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
          </a>
          <h3><?php the_title(); ?></h3>
          </div>

          <!-- end project image -->

      <?php endwhile;?>
      </div>
      <!-- End Projects List -->

      </section>


</main><!-- .site-main -->

   <script>
    jQuery(function($) {
      $('.fs-slider__projects').slick({
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

  <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

