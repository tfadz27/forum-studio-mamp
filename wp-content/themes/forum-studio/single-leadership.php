<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Forum_Studio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="fs-container">
        <div class="fs-container__col-3">
        	<div class="thumb"><?php the_post_thumbnail('image') ?></a></div>

					<div class="fs-leadership__single-card">
						<h1 class="fs-h1">Contact</h1>
		      		<span class="phone"><?php the_field('phone'); ?></span>
		      		<a href="mailto: <?php the_field('email'); ?>"><?php the_field('email'); ?></a>
		      </div>

					<nav class="fs-leadership__nav">
		      	<span class="fs-leadership__nav--prev"><?php previous_post_link( '%link','Previous Profile' ) ?></span> 
		      	<span class="fs-leadership__nav--next"><?php next_post_link( '%link','Next Profile' ) ?></span>
		      </nav>
        </div>
        

        <div class="fs-container__col-7">
				 <h4 class="fs-h4"><?php the_title(); ?>, 
         <span class="title"><?php the_field('title'); ?></span></h4>
         <span class="bio"><?php the_field('bio'); ?></span>


					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>  
			

      </div><!-- col 7 -->
      <div class="fs-container__col-3">
      	<h5 class="fs-h5">RELATED CONTENT</h5>
      </div>
         
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
