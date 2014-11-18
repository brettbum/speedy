<?php
/**
 * This file adds the Home Page to the Parallax Pro Theme.
 *
 * @author StudioPress
 * @package Parallax
 * @subpackage Customizations
 */

add_action( 'genesis_meta', 'parallax_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function parallax_home_genesis_meta() {

	if ( is_active_sidebar( 'home-section-1' ) || is_active_sidebar( 'home-section-2' ) || is_active_sidebar( 'home-section-3' ) || is_active_sidebar( 'home-section-4' ) || is_active_sidebar( 'home-section-5' )  || is_active_sidebar( 'home-section-6' )  || is_active_sidebar( 'home-section-7' )  || is_active_sidebar( 'home-section-8' )  || is_active_sidebar( 'home-section-9' )  || is_active_sidebar( 'home-section-10' ) ) {

		//* Enqueue parallax script
		add_action( 'wp_enqueue_scripts', 'parallax_enqueue_parallax_script' );
		function parallax_enqueue_parallax_script() {

			if ( ! wp_is_mobile() ) {

				wp_enqueue_script( 'parallax-script', get_bloginfo( 'stylesheet_directory' ) . '/js/parallax.js', array( 'jquery' ), '1.0.0' );

			}

		
		}

		//* Add parallax-home body class
		add_filter( 'body_class', 'parallax_body_class' );
		function parallax_body_class( $classes ) {
		
   			$classes[] = 'parallax-home';
  			return $classes;
  			
		}

		//* Force full width content layout
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

		//* Remove primary navigation
		remove_action( 'genesis_before_content_sidebar_wrap', 'genesis_do_nav' );

		//* Remove breadcrumbs
		remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs');

		//* Remove the default Genesis loop
		remove_action( 'genesis_loop', 'genesis_do_loop' );

		//* Add homepage widgets
		add_action( 'genesis_loop', 'parallax_homepage_widgets' );

	}
}

//* Add markup for homepage widgets
function parallax_homepage_widgets() {

	genesis_widget_area( 'home-section-1', array(
		'before' => '<div id="home-section-1" class="home-odd home-section-1 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

	genesis_widget_area( 'home-section-2', array(
		'before' => '<div id="home-section-2" class="home-even home-section-2 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

	genesis_widget_area( 'home-section-3', array(
		'before' => '<div id="home-section-3" class="home-odd home-section-3 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

	genesis_widget_area( 'home-section-4', array(
		'before' => '<div id="home-section-4" class="home-even home-section-4 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

	genesis_widget_area( 'home-section-5', array(
		'before' => '<div id="home-section-5" class="home-odd home-section-5 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

	genesis_widget_area( 'home-section-6', array(
		'before' => '<div id="home-section-6" class="home-even home-section-6 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );
	genesis_widget_area( 'home-section-7', array(
		'before' => '<div id="home-section-7" class="home-odd home-section-7 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );
	genesis_widget_area( 'home-section-8', array(
		'before' => '<div id="home-section-8" class="home-even home-section-8 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );
	genesis_widget_area( 'home-section-9', array(
		'before' => '<div id="home-section-9" class="home-odd home-section-9 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );
	genesis_widget_area( 'home-section-10', array(
		'before' => '<div id="home-section-10" class="home-even home-section-10 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );
	
}

genesis();
