<?php /* Template Name: Forum Projects */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">



<!-- Slideshow -->


<!-- end slideshow -->



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


  </main><!-- .site-main -->

  <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

