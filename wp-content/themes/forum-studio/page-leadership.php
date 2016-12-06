<?php /* Template Name: Forum Leadership */ ?>

<?php get_header(); ?>
  

<div id="primary" class="content-area">
  
  <main id="main" class="site-main fs-main" role="main">
 
      <section class="fs-container">
        <div class="fs-container__col-9">
          
          <section class="fs-leaders">
           <?php $recentPosts = new WP_Query(array('posts_per_page' => -1, 'post_type' => array('leadership') ));
            while( $recentPosts->have_posts() ) :  $recentPosts->the_post();  ?>
                
                <article class="fs-leadership-person">
                  <div class="thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image') ?></a></div>
                   <div class="fs-leadership-card">
                    <span><a href="<?php the_permalink(); ?>" class="name"><?php the_title(); ?></a>, <span class="title"><?php the_field('title'); ?></span></span>
                   
                    <span class="email"><a href="mailto: <?php the_field('email'); ?>"><?php the_field('email'); ?></a></span>
                    <span class="phone"><?php the_field('phone'); ?></span>
                  </div>
                </article>
                <?php endwhile;?>
               
          </div>

        </div>
        <aside class="fs-container__col-3"></aside>

      </section>
  </main><!-- .site-main -->

  <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->




<?php get_sidebar(); ?>
<?php get_footer(); ?>

