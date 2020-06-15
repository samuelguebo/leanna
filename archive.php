<?php
/*
================================================================================================
The archive template file
================================================================================================

@link           @link https://codex.wordpress.org/Template_Hierarchy
@package        Leanna
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/

get_header(); ?>
            <section class="single-cover" 
             style="background-image:url(<?php echo esc_url(get_header_image());?>); background-position:center center;">
                <div class="overlay">
                    <h3 class="center title">
                        <?php echo the_archive_title();?>
                    </h3>
                </div>
            </section>
            <section id="breadcrumbs" class="row">
                <div class="breadcrumbs">
                    <?php if (function_exists('leanna_custom_breadcrumbs')) leanna_custom_breadcrumbs(); ?>
                </div>
            </section>
            <section class="category-row row">                
                <!-- post list-->
                <section class="large-8 columns main-column">
                    <div class="post-list clearfix">
                        <?php
                            if ( have_posts() ) :
                                /* Start the Loop */
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // for pagination purpose
                                while ( have_posts() ) : the_post();

                                    if(has_post_thumbnail()){
                                        leanna_get_template_part('template-parts/content-article.php', 'large-6 medium-6 small-12', 'post-thumb');
                                    }else {
                                        leanna_get_template_part('template-parts/content-article-without-thumb.php', 'large-6 medium-6 small-12', 'post-thumb');
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
                </section>
                <?php get_sidebar();?>
            </section>
<?php
get_footer();
