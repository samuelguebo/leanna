<?php
/*
================================================================================================
The slider containing the carousel animation
================================================================================================
@package        Leanna
@link           https://developer.wordpress.org/themes/basics/template-files/#template-partials
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
 */
?>
<?php //starting slider loop;
	$sliders = Leanna_Kirki::get_option('slider_repeater');
	if (is_array($sliders)): ?>
		<!-- Slides: Images and Captions -->
		<section id="slider" class="slider-wrapper">
			<?php
				foreach ($sliders as $post): setup_postdata($post);
					get_template_part('template-parts/content', 'slide');
				endforeach;
			?>
		</section>
	<?php endif;
wp_reset_postdata();
$sliders = null;?>

	<!-- Javascript setting for the slider -->
	<script>
		jQuery(document).ready(function ($) {
			// Initialize Homepage slider
			 $('.slider-wrapper').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 4000,
				swipe: true,
				pauseOnHover: true,
				swipeToSlide: true,
				arrows: true,
				fade: true
			});

			// Handle typewriter
			let typedWrapper = $('header span.type-machine')[0];
			let stringsWrapper = $('header span.strings')[0];
			let strings = stringsWrapper.innerHTML.split(',')
			stringsWrapper.innerHTML = strings[0]
			strings[0] = " ^3000 " + strings[0]
			// console.log(strings)
			
			/* Typed animation text */
			let options = {
				strings: strings
				, loop: true
				, backDelay: 2.5*1000
				, typeSpeed: 80
				, backSpeed: 50
			}

			var typed = new Typed(typedWrapper, options);
		});
	</script>