<?php

function acf_theme_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'block-name',
			'title'				=> __('Block title'),
			'description'		=> __('Description'),
			'render_template'	=> 'gutenberg/block-quem-somos.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'keyword' ),
		));
	}
}

add_action('acf/init', 'acf_theme_block');

?>