<?php

if ( ! function_exists( 'askka_child_theme_enqueue_scripts' ) ) {
	/**
	 * Function that enqueue theme's child style
	 */
	function askka_child_theme_enqueue_scripts() {
		$main_style = 'askka-main';

		wp_enqueue_style( 'askka-child-style', get_stylesheet_directory_uri() . '/style.css', array( $main_style ) );
	}

	add_action( 'wp_enqueue_scripts', 'askka_child_theme_enqueue_scripts' );
}
