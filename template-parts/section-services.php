<?php
/*
================================================================================================
Template part for displaying services section
================================================================================================
@package        Leanna
@link           https://codex.wordpress.org/The_Loop
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/
$service_section_title = Leanna_Kirki::get_option( 'services_section_title');
$service_section_description = Leanna_Kirki::get_option( 'services_section_description');
$services = Leanna_Kirki::get_option( 'services_repeater');
?>
<section class="row main-row clearfix white-section">
			<section class="columns main-column white-section large-7 small-12 large-centered columns clearfix">
				<h2 class="section-title"><?php echo $service_section_title; ?></h2>
				<p class="section-description"><?php echo $service_section_description; ?></p>
				<div class="bottom-line large-1 small-1 large-centered columns clearfix"></div>
			</section><!--section description/-->
			<?php if(is_array($services)): //make sure array is not empty ?>
				<section class="columns main-column items-wrapper">
					<?php foreach ($services as $service): // loop through array?>
							<div class="small-12 medium-4 large-4 section-item">
									
									<div class="content">
										<h2><i class="fa <?php echo $service['service_icon'] ?>"></i></h2>
										<h5 class="item-title"><?php echo $service['service_title'] ?></h5>
										<p class="item-description"><?php echo $service['service_description'] ?>
										</p>

										<a href="<?php the_permalink($service['service_page']);?>" title="<?php echo $service['service_title'];?>" class="item-link">
										<i class="fa fa-chevron-right"></i>
										</a>
									</div>
							</div>
					<?php endforeach;?>
				</section>
			<?php endif;?>
</section>
