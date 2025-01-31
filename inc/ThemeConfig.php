<?php
namespace MyTheme;
class ThemeConfig {
	public function __construct() {
		add_action( 'after_setup_theme', [ $this, 'themeSupports' ] );
		add_action( 'init', [ $this, 'registerMenus' ] );;
		add_action( 'init', [ $this, 'mytheme_cleanup' ] );
	}

	public function themeSupports() {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );
		add_theme_support( 'title-tag' );
	}

	public function registerMenus() {
		register_nav_menus( [
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' ),
		] );
	}

	function mytheme_cleanup() {

		add_filter( 'use_default_gallery_style', '__return_false' );


		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}


}