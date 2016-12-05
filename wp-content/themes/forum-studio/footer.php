<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forum_Studio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<section class="site-info fs-footer">

		  
      <article class="fs-footer__col">

        <div id="fs-footer__links">
          <?php
            if(is_active_sidebar('footer-links')){
              dynamic_sidebar('footer-links');
            }
          ?>
        </div>

      </article>



      <article class="fs-footer__col">
        <div id="fs-footer__partners">
          <?php
            if(is_active_sidebar('footer-partners')){
              dynamic_sidebar('footer-partners');
            }
          ?>
        </div>

        <div id="fs-footer__address">
          <?php
            if(is_active_sidebar('footer-address')){
              dynamic_sidebar('footer-address');
            }
          ?>
        </div>

      </article>


      
      <article class="fs-footer__col">
    
        <div id="fs-footer__social-media">
         <h3 class="widget-title">Connect</h3>
            <?php
              if(is_active_sidebar('footer-social-media')){
                dynamic_sidebar('footer-social-media');
              }
            ?>
        </div>

        <div class="fs-footer__signup">
          <h3 class="fs-footer__signup--title">Sign Up</h3>
            <div class="fs-footer__signup--content">Enter your email address to receive<br /> occasional updates from Forum Studio</div>
        </div>
      </article>


      <?php // printf( esc_html__( 'Theme: %1$s by %2$s.', 'forum-studio' ), 'forum-studio', '<a href="http://underscores.me/" rel="designer">Thirdwave LLC</a>' ); ?>


		</section><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
