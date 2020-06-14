<?php
/*
================================================================================================
Template part for displaying gallery items
================================================================================================
@package        Leanna
@link           https://codex.wordpress.org/The_Loop
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/
?>
    

<article id="post-<?php the_ID(); ?>" class="post-item <?php echo $container_class;?> columns">
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
            <h3 class="post-item-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        </div>
    </div>
</article>
