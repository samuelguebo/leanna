<?php
/*
================================================================================================
Template part for displaying biography section
================================================================================================
@package        Leanna
@link           https://codex.wordpress.org/The_Loop
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/
$biography_section_title = esc_attr(Leanna_Kirki::get_option( 'biography_section_title'));
$biography_section_description = esc_attr(Leanna_Kirki::get_option( 'biography_section_description'));
$biography_page = esc_attr(Leanna_Kirki::get_option( 'biography_page'));
$biography_background          = esc_attr(Leanna_Kirki::get_option( 'biography_background'));

//$biography_background          = wp_get_attachment_image_src(leanna_get_attachment_id_from_src($biography_background), 'slider-cover')[0];
?>

<section style="position: relative;" class="biography-wrapper">
	<section style="background:url(<?php echo esc_url($biography_background);?>); background-position: top center; background-size: cover; opacity: .1; height: 100%; position: absolute; width: 100%; background-attachment: fixed">
	</section>
	<section class="clearfix biography main-row white-section">
			<section class="columns large-10 small-12 large-centered columns clearfix">
				<h2 class="section-title"><?php _e($biography_section_title, 'leanna');?></h2>
				<p class="section-description"><?php _e($biography_section_description, 'leanna');?></p>
                <div class="buttons">
                    <a href="<?php echo get_the_permalink($biography_page);?>" class="small button round one"> <?php _e('Read biography', 'leanna')?></a>
                </div>
			</section><!--section description/-->
	</section>
</section>
