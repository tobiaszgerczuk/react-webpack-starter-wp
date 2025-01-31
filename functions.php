<?php


spl_autoload_register(function ($class) {
	$prefix = 'MyTheme\\';
	$base_dir = get_template_directory() . '/inc/';

	if (strpos($class, $prefix) === 0) {
		$relative_class = str_replace($prefix, '', $class);
		$file = $base_dir . $relative_class . '.php';

		if (file_exists($file)) {
			require_once $file;
		}
	}
});


new MyTheme\ACFBlocks();
new MyTheme\ThemeAssets();
new MyTheme\ThemeConfig();
