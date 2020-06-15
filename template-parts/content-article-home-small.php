<?php
/*
================================================================================================
Template part for displaying articles in loop (Home Small)
================================================================================================
@package        Leanna
@link           https://codex.wordpress.org/The_Loop
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/
?>
    

<article id="post-<?php the_ID(); ?>" class="post-item <?php echo $container_class;?>  small">
    <!--post/-->
    <div class="post-item-caption">
        <div class="post-item-image"> 
            <?php
                if ( has_post_thumbnail_or_image ()) { 
                    the_post_thumbnail( $thumbnail_size ); 
                }
            ?>

        </div>
        <div class="panel">
            <?php if( get_post_type( get_the_ID() ) == 'post' ):?>
                <span class="post-item-date"><?php echo get_the_date('d/m/Y')?> / <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></span><br><!--date/-->
            <?php endif;?>
            <h6 class="post-item-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
            <p><?php echo leanna_new_excerpt_length(140);?></p> 
        </div>
    </div>
</article>
