<?php
/*
================================================================================================
The header for our theme. This is the template that displays all of the <head> section 
and everything up until <div id="content">
================================================================================================

@link           https://developer.wordpress.org/themes/basics/template-files/#template-partials
@package        Leanna
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/

?><!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php 
    if( false === get_option( 'site_icon', false ) ) {
        // Show favicon
        wp_site_icon(); 
    }
    ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="nav-wrapper large-6 medium-6 small-12 columns">
            <?php get_template_part('menu'); ?>
        </div><!--/nav-wrapper-->     
        <?php if(is_front_page()){
            // require slider
            get_template_part ('template-parts/slider'); 
        }
        ?>   
        <div class="socials">
            <?php get_template_part('menu-social');?>
        </div>
    </header>