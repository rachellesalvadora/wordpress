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

define( 'THEMEROOT', get_stylesheet_directory_uri() );
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

/**
 * ---------------------------------------------------------------------------------------------
 * 4.0 - Set up the theme default and register various supported features.
 * ---------------------------------------------------------------------------------------------
 */

if ( ! function_exists( 'manak_setup' ) ) {
	function manak_setup() {
		/**
		 * Make the theme available for translation.
		 */
		$lang_dir = THEMEROOT . '/languages';
		load_theme_textdomain( 'alpha', $lang_dir );

		/**
		 * Add support for post formats.
		 */
		add_theme_supprt( 'post-formats', 
			array(
				'gallery',
				'link',
				'image',
				'qoute',
				'video',
				'audio'
			)
		);

		/**
		 * Add support for automatic feed links.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Add support for post thumbnails.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main_menu' => __( 'Main Menu', 'alpha' )
			)
		);

	}

	add_action( 'after_theme_setup', 'manak_setup' );
}

/**
 * ---------------------------------------------------------------------------------------------
 * 5.0 - Display meta information for a specific post.
 * ---------------------------------------------------------------------------------------------
 */

if ( ! function_exists( 'alpha_post_meta' ) ) {
	function alpha_post_meta() {
		echo '<ul class="lis-inline entry-meta">';

		if ( get_post_type() === 'post' ) {
			// If the post is sticky, mark it.
			if ( is_sticky() ) {
				echo '<li class="meta-featured-post"><i class="fa fa-thumb-tack"></i> ' . __( 'Sticky' , 'alpha' ) . '</li>';
			}

			// Get the post author.
			printf(
				'<li class="meta-author"><a href="%1$s" rel="author">%2$s</a></li>',
				esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);

			// Get the date.
			echo '<li class="meta-date"> '. get_the_date() . '</li>';

			//The categories.
			$category_list = get_the_category_list( ', ');
			if ( $category_list ) {
				echo '<li class="meta-categories"> '. $category_list . ' </li>';
			}
		}
	}
}

?>