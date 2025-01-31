<?php
function my_theme_enqueue_scripts() {
	wp_enqueue_script(
		'theme-js',
		get_template_directory_uri() . '/dist/js/bundle.js',
		['wp-element'], // Wymaga Reacta z WordPressa
		null,
		true
	);
	wp_enqueue_style('theme-styles', get_template_directory_uri() . '/dist/css/styles.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
