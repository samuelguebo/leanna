<?php
/*
================================================================================================
The template for displaying the social menu items
================================================================================================
@package        Leanna
@link 			https://aristath.github.io/kirki/docs/controls/repeater.html
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/
?>

<?php $socials = Leanna_Kirki::get_option( 'social_repeater' );
if (is_array($socials)): //make sure the icons list is not empty ?> 
	<ul class="right social-icons">
		<?php foreach ($socials as $social) :?>
			<li class="reveal">
				<a href="<?php echo $social['social_url']; ?>" title="<?php echo $social['social_title']; ?>"></a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>