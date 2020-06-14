<?php
/*
================================================================================================
The main template file. This is the most generic template file in a WordPress theme
and one of the two required files for a theme (the other being style.css).
It is used to display a page when nothing more specific matches a query.
E.g., it puts together the home page when no home.php file exists.
================================================================================================
@package        Leanna
@link           @link https://codex.wordpress.org/Template_Hierarchy
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/
get_header(); 


      
// Make sure Kirki is activated
if ( class_exists( 'Kirki' ) ):
	// services section
	get_template_part('template-parts/section-services');

    // blog biography
    get_template_part('template-parts/section-biography');

    // blog section
    get_template_part('template-parts/section-blog');

else:
?>
<div class="post-list clearfix">
    <div class="row" >
        <div class="main-row no-padding-top" >
            <div class="columns large-12 category-header no-padding">
                    <h4 class="category-title">
                        <?php _e('Recent posts');?>
                    </h4>
            </div><!--header/-->
        </div><!--main-row/-->
    </div><!--row/-->
    <?php
        if ( have_posts() ) :
            /* Start the Loop */
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // for pagination purpose
            while ( have_posts() ) : the_post();

                if(has_post_thumbnail()){
                    leanna_get_template_part('template-parts/content-article.php', 'large-4 medium-6 small-12', 'post-thumb');
                }else {
                    leanna_get_template_part('template-parts/content-article-without-thumb.php', 'large-4 medium-6 small-12', 'post-thumb');
                }

            endwhile;

        else :

            get_template_part( 'template-parts/content', '404' );

        endif; ?>
</div>
<div class="pagination-wrapper columns large-4 large-centered" >
    <?php the_posts_pagination( array(
        'mid_size' => 2,
        'prev_text' => __( '&laquo;', 'leanna' ),
        'next_text' => __( '&raquo;', 'leanna' ),
        'screen_reader_text' => ' '
    ) ); ?>
</div>
<?php
endif;
get_footer();
