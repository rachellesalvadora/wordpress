<?php

/**
 * functions.php
 *
 * The theme's functions and definitions.
 */

/**
 * ---------------------------------------------------------------------------------------------
 * 1.0 - Define constants.
 * ---------------------------------------------------------------------------------------------
 */

define( 'THEMEROOT', get_stylesheet_derectory_uri() );
define( 'IMAGES', THEMEROOT . '/images' );
define( 'SCRIPTS', THEMEROOT . '/js' );
define( 'FRAMEWORK', get_template_directory() . '/framework' );

/**
 * ---------------------------------------------------------------------------------------------
 * 2.0 - Load the framework.
 * ---------------------------------------------------------------------------------------------
 */

require_once( FRAMEWORK . '/init.php' );

/**
 * ---------------------------------------------------------------------------------------------
 * 3.0 - Set up the content width value based on the theme's design.
 * ---------------------------------------------------------------------------------------------
 */

if ( ! isset( $content_width ) ) {
	$content_width = 800;
}

?>