<?php /* Template Name: Forum About Us */ ?>

<?php get_header(); ?>
  

<div id="primary" class="content-area">
  
  <main id="main" class="site-main fs-main" role="main">
 
    <div class="fs-secondary__hero" style="background-image:url('<?php the_field('hero_header_image'); ?>');background-size: cover;"></div>
      <section class="fs-container">
        <div class="fs-container__col-9">
        <!-- About Us Content Blocks -->
        <?php if(have_rows('about_us_content')) : while(have_rows('about_us_content')) : the_row(); 
        $aboutBlockTitle   = get_sub_field('title');
        $aboutBlockIntro   = get_sub_field('intro');
        $aboutBlockContent = get_sub_field('content');
        ?>
        <article class="fs-block">
          <h3 class="fs-h3"><?php echo $aboutBlockTitle; ?></h3>
          <h4 class="fs-h4"><?php echo $aboutBlockIntro; ?></h4>
          <?php echo $aboutBlockContent; ?>
        </article>
      <?php endwhile; endif; ?>


       <!-- About Us Content 3 Column -->
        <section class="fs-3column-blocks">
         <?php if(have_rows('about_us_content_3_column')) : while(have_rows('about_us_content_3_column')) : the_row(); 
          $aboutColumnsTitle   = get_sub_field('title');
          $aboutColumnsContent = get_sub_field('content');
          $aboutColumnsLink    = get_sub_field('link');
          ?>
          <article class="fs-3column-blocks__block">
            <h3 class="fs-h3"><?php echo $aboutColumnsTitle; ?></h3>
            <?php echo $aboutColumnsContent; ?>
            <span class="fs-3column-blocks__link"><?php echo $aboutColumnsLink; ?></span>
          </article>
          <?php endwhile; endif; ?>
        </section>

        </div>
        <aside class="fs-container__col-3"></aside>

      </section>
  </main><!-- .site-main -->

  <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->




<?php get_sidebar(); ?>
<?php get_footer(); ?>

