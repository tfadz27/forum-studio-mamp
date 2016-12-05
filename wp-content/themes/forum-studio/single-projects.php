<?php /* Template Name: Forum Project Single */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">



<!-- Slideshow -->

<!-- end slideshow -->



<!-- Start Projects List -->
<div class="fs-main">



  <div class="fs-main__project">
  
  <h3><?php the_title(); ?></h3>
  <?php the_field('project_info'); ?>

  <!-- Project image thumbnail -->
  <div class="fs-project-thumb">
  <?php 
    $image = get_field('featured_thumbnail');
    if( !empty($image) ): ?>
    <img class="fs-project-thumb__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  <?php endif; ?>
  </div>
  <!-- end project image -->
  </div>

  <div class="fs-main__project-stats">
  <h4>PROJECT DETAIL</h4>
  <?php the_field('client'); ?>
  <?php the_field('location'); ?>
  <?php the_field('size'); ?>
  <?php the_field('awards'); ?>
  <div>Markets: <br />

  </div>
  </div>
</div>

</div>
<!-- End Projects List -->


  </main><!-- .site-main -->

  <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

