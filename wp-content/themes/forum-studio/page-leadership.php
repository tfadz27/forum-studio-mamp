<?php /* Template Name: Forum Leadership */ ?>

<?php get_header(); ?>
  

<div id="primary" class="content-area">
  
  <main id="main" class="site-main fs-main" role="main">
 
      <section class="fs-container">
        <div class="fs-container__col-9">
        <h1 class="fs-h1">Leadership</h1>
        <h4 class="fs-h4"><?php the_field('leadership_title'); ?></h4>
        
        <div style="width: 100%;max-width: 700px;"><?php the_field('leadership_content'); ?></div>
        </div>

         <aside class="fs-container__col-3 fs-leadership-sidebar">
          <h5 class="fs-h5">LEADERSHIP BY INDUSTRY</h5>
          <ul>
          <li><a href="#">Corporate</a></li>
          <li><a href="#">Industrial</a></li>
          <li><a href="#">Institutional</a></li>
          <li><a href="#">Residential</a></li>
          </ul>
        </aside>
          
          <section class="fs-leaders">
            <?php $recentPosts = new WP_Query(array('posts_per_page' => -1, 'post_type' => array('leadership') ));
            while( $recentPosts->have_posts() ) :  $recentPosts->the_post();  ?>
                
                <article class="fs-leadership-person">
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

  <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->




<?php get_sidebar(); ?>
<?php get_footer(); ?>

