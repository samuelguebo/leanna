<?php
/*
================================================================================================
Template part for displaying blog sections
================================================================================================
@package        Leanna
@link           https://codex.wordpress.org/The_Loop
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/
$blog_section_title = esc_attr(Leanna_Kirki::get_option( 'blog_section_title'));
$blog_section_description = esc_attr(Leanna_Kirki::get_option( 'blog_section_description'));
$blog_post_number = esc_attr(Leanna_Kirki::get_option( 'blog_post_number'));
?>

<section class="home-blog clearfix white-section">
	<section class="row main-row clearfix white-section">
				<section class="columns main-column large-8 small-12 large-centered columns clearfix">
					<h2 class="section-title"><?php _e($blog_section_title, 'leanna'); ?></h2>
					<p class="section-description"><?php _e($blog_section_description, 'leanna'); ?></p>
					<div class="bottom-line large-1 small-1 large-centered columns clearfix"></div>
				</section><!--section description/-->
	</section>
	<section class="row">
	<?php	$i = 1;
            if ( have_posts() ) :
                /* Start the Loop */
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // for pagination purpose
                $args = array(
                        'post_type' => array('post'),
                        'posts_per_page' =>$blog_post_number,
                        'paged'=>$paged
                        );
                $blog_posts = new WP_Query($args);
                while ( $blog_posts->have_posts() ) : $blog_posts->the_post();
						if($i == 1){
						echo '<section class="large-6 small-12 columns ">';
							leanna_get_template_part('template-parts/content-article-home-small.php', 'large-12 medium-6 small-12 columns', 'post-thumb-small');
				
						}else if ($i == 2){
							leanna_get_template_part('template-parts/content-article-home-small.php', 'large-12 medium-6 small-12 columns', 'post-thumb-small');
							echo '</section>'; 
						}else if($i == 3) {
							echo '<section class="columns large-6 small-12">';
							leanna_get_template_part('template-parts/content-article-home-big.php', 'large-12', 'post-thumb-big');
							echo '</section>'; 
							echo '<section class="clearfix"></section>'; 
						}else {
							leanna_get_template_part('template-parts/content-article-home-big.php', 'large-4 medium-3 small-12', 'post-thumb');
						}
					$i++;
				endwhile;

				else :

					get_template_part( 'template-parts/content', '404' );

		endif; wp_reset_query();
		?>
	</section>
</section>
