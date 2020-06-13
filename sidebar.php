<?php
/*
================================================================================================
The sidebar containing the main widget area
================================================================================================
@package        Leanna
@link           https://developer.wordpress.org/themes/basics/template-files/#template-partials
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/
if ( ! is_active_sidebar( 'sidebar-main' ) ) {
	return;
}
?>

<!-- #secondary -->
<aside id="sidebar" class="large-4 columns">
    <?php dynamic_sidebar( 'sidebar-main' ); ?>
</aside>