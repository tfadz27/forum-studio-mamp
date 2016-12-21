<?php /* Template Name: Forum Leadership */ ?>

<?php get_header(); ?>
  

<div id="primary" class="content-area">
  
  <main id="main" class="site-main fs-main" role="main">

    <section class="fs-slider__people">
        <?php if(have_rows('people_slider')) : while(have_rows('people_slider')) : the_row(); 
            $sliderImage = get_sub_field('image');
          ?>
        <div>
         <div class="fs-slide" style="background:url(<?php echo $sliderImage['url']; ?>) no-repeat;background-size: cover;">
         </div>
        </div>
       <?php endwhile; endif; ?>
    </section>

 
      <section class="fs-container fs-leadership">
        <div class="fs-container__col-9">
          <h1 class="fs-h1">Leadership</h1>
            <h4 class="fs-h4"><?php the_field('people_title'); ?></h4>
            <div class="fs-leadership__content"><?php the_field('people_content'); ?></div>
        </div>

         <aside class="fs-container__col-3 fs-leadership-sidebar">
          <h5 class="fs-h5">LEADERSHIP BY INDUSTRY</h5>
            <ul class="filter">
              <li><a href="#" data-filter="Corporate">Corporate</a></li>
              <li><a href="#" data-filter="Industrial">Industrial</a></li>
              <li><a href="#" data-filter="Institutional">Institutional</a></li>
              <li><a href="#" data-filter="Residential">Residential</a></li>
            </ul>
        </aside>
          
        <section class="fs-leaders boxes">

          <?php $recentPosts = new WP_Query(array('posts_per_page' => -1, 'order' => 'ASC', 'post_type' => array('leadership') ));
          while( $recentPosts->have_posts() ) :  $recentPosts->the_post();  ?>

            <article class="fs-leadership-person" data-category="<?php the_field('market'); ?>">
              <div class="thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image') ?></a></div>
               
               <div class="fs-leadership-card">
                <span class="name-title"><a href="<?php the_permalink(); ?>" class="name"><?php the_title(); ?></a>, 
                <span class="title"><?php the_field('title'); ?></span></span>
                <span class="phone"><?php the_field('phone'); ?></span>
                <span class="email"><a href="mailto: <?php the_field('email'); ?>"><?php the_field('email'); ?></a></span>
                <span class="fs-link"><a href="<?php the_permalink(); ?>">Read More</a></span>
              </div>
            </article>
          <?php endwhile;?>
        </div>

       </section>
  </main><!-- .site-main -->
  
   <script>
    jQuery(function($) {
      $('.fs-slider__people').slick({
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

  <script>
  (function($) {

  'use strict';

  var $filters = $('.filter [data-filter]'),
    $boxes = $('.boxes [data-category]');

  $filters.on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    
    $filters.removeClass('active');
    $this.addClass('active');

    var $filterColor = $this.attr('data-filter');

    if ($filterColor == 'all') {
      $boxes.removeClass('is-animated')
        .fadeOut().finish().promise().done(function() {
          $boxes.each(function(i) {
            $(this).addClass('is-animated').delay((i++) * 200).fadeIn();
          });
        });
    } else {
      $boxes.removeClass('is-animated')
        .fadeOut().finish().promise().done(function() {
          $boxes.filter('[data-category = "' + $filterColor + '"]').each(function(i) {
            $(this).addClass('is-animated').delay((i++) * 200).fadeIn();
          });
        });
    }
  });

})(jQuery);
</script>

   <script>
    jQuery(function($) {

      // $('.fs-leadership-person').attr('data-category', value).replace(/^,*|,(?=,)|,$/g, '');

      var noCommas = $('.fs-leadership-person').attr('data-category').replace(/,/g , "");
       $('.fs-leadership-person').attr('data-category', noCommas)

    });
   </script>

  <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>

