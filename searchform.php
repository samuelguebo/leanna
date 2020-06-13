<?php
/*
================================================================================================
The template for displaying search forms
================================================================================================
@package        Leanna
@link           https://developer.wordpress.org/reference/functions/get_search_form/
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/

?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="row collapse">
            <div class="small-10 columns">
                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'leanna' ); ?>" value="<?php echo get_search_query(); ?>" name="s" /> 
            </div>
            <div class="small-2 columns"> 
            <button type="submit" class="search-submit button small"><span class="screen-reader-text"><i class="fa fa-search"></i></span></button>
            </div>
        </div>
</form>
