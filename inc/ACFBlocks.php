<?php
namespace MyTheme;

class ACFBlocks {
	public function __construct() {
		add_action('acf/init', [$this, 'registerBlocks']);
	}

	public function registerBlocks() {
		if (function_exists('acf_register_block_type')) {
			acf_register_block_type([
				'name'            => 'custom_block',
				'title'           => __('Custom Block'),
				'description'     => __('A custom block for my theme.'),
				'render_template' => 'template-parts/blocks/custom-block.php',
				'category'        => 'formatting',
				'icon'            => 'admin-comments',
				'keywords'        => ['custom', 'block'],
			]);
		}
	}
}


new ACFBlocks();
