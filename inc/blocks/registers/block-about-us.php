<?php

function acf_urban_content_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'Urban-content',
			'title'				=> __('Block Content'),
			'description'		=> __('Description'),
			'render_template'	=> 'inc/blocks/gutenberg/block-about-us.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'Urban' ),
		));
	}
}

add_action('acf/init', 'acf_urban_content_block');

?>