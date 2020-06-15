<?php
/*
================================================================================================
Template part for displaying a slide item in the Slider loop
================================================================================================
@package        Leanna
@link https://codex.wordpress.org/The_Loop
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/

$title = '';
$strings = explode(",", $post['slide_title']);
if(count($strings) > 0){
    $title = $strings[0];
}
?>
<section class="post-item">
        <div class="img-wrapper">
            <img src="<?php echo leanna_get_thumb_by_id($post['slide_image'],'full');?>" alt="<?php echo $post['slide_title'];?>" class="responsive delay"/>
        </div>
        <div class="slider-caption post-item-caption">
            <div class="panel large-8 medium-7 small-8 columns">
                <h1 class="post-item-title"><?php echo $post['slide_description'];?> <span class="type-machine"><?php echo $title;?></span></h1>
                <span class="strings"><?php echo $post['slide_title'];?></span>
            </div>
        </div>
    <div class="clearfix"></div>
</section> 