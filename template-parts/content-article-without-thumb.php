<?php
/*
================================================================================================
Template part for displaying articles in loop
================================================================================================
@package        Leanna
@link           https://codex.wordpress.org/The_Loop
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/
?>

<article id="post-<?php the_ID(); ?>" class="post-item large-6 medium-6 columns">
    <!--post/-->
    <div class="post-item-caption">        
        <div class="panel">
            <span class="post-item-date wrap"><?php echo get_the_date('d/m/Y')?></span>
            <h6 class="post-item-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
            <p><?php the_excerpt();?></p> 
            <a href="<?php the_permalink();?>" class="small button post-item-buttom"><?php _e('Read more','leanna')?></a> 
            <?php if ( get_edit_post_link() ) : ?>
                <a href="<?php echo get_edit_post_link();?>" class="small button alert"><i class="fa fa-edit"></i> <?php _e('Edit','leanna')?></a> 
                    
            <?php endif; ?>
        </div>
    </div>
</article>


