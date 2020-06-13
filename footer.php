<?php
/*
================================================================================================
The template for displaying the footer. It contains the closing of the body all content 
after and containing the bottom widget area
================================================================================================
@package        Leanna
@link           https://developer.wordpress.org/themes/basics/template-files/#template-partials
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/
?>
			<footer id="footer">
				<div class="footer-bar parallax clearfix">
						<?php dynamic_sidebar( 'footer-1' );?>
				</div><!-- .footer-bar -->
				<div class="main-row row">
						<div class="small-12 medium-6 large-10 columns">
							<p class="copyright"><?php _e('&copy; ','leanna')?> <?php echo get_the_date('Y'); ?> <?php echo bloginfo('name'); ?>
                            / <?php _e('Developed by ','leanna')?><a href="<?php echo esc_url( __( 'https://samuelguebo.ci', 'leanna' ) ); ?>">Samuel Guebo</a> ( <a href="https://github.com/samuelguebo/leanna"><i class="fa fa-github"></i> <?php _e('source code','leanna')?> </a>)
							</p><!-- copyright-->
                            
						</div>
						<div class="small-12 medium-6 large-2 columns socials">
							<?php get_template_part('menu-social'); ?>
						</div>

				</div>
				<div class="row back-to-top-wrapper">
					<a href="#0" class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a><!-- back to top-->
				</div>
			</footer>
			<?php wp_footer(); ?>
		</section><!-- .boxed-wrapper-->
	</body>
</html>