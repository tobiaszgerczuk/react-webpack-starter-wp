<?php
namespace MyTheme;

class ThemeAssets {
	public function __construct() {
		add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
	}

	public function enqueueScripts() {
		wp_enqueue_script(
			'theme-js',
			get_template_directory_uri() . '/dist/js/bundle.js',
			['wp-element'],
			null,
			true
		);
		wp_enqueue_style('theme-styles', get_template_directory_uri() . '/dist/css/styles.css');
	}
}

new ThemeAssets();
