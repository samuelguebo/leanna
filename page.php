<?php
/*
================================================================================================
The template for displaying all pages.  This is the template that displays all pages by default.
and that other 'pages' on your WordPress site may use a different template.
================================================================================================
@package        Leanna
@link           https://codex.wordpress.org/Template_Hierarchy
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/

get_header(); ?>
    <section class="single-cover" 
     style="background-image:url(<?php echo esc_url(get_header_image());?>); background-position:center center;">
        <div class="overlay">
            <h3 class="center title columns large-10 large-centered">
            <?php the_title();?>
            <section class="clearfix"></section>
        </h3>
        </div>
        
    
    </section>
    <section class="row single-row">
        <section id="breadcrumbs" class="clearfix">
            <div class="breadcrumbs">
                <?php if (function_exists('leanna_custom_breadcrumbs')) leanna_custom_breadcrumbs(); ?>
            </div>
        </section>
        <section class="large-8 columns main-column">
            <?php
            while ( have_posts() ) : the_post();

                // Include the single post content template.
			     get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
            ?>
        </section>
        <?php get_sidebar();?>
    </section>
    <?php get_footer();?>