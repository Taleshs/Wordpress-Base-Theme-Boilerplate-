<?php

function acf_urban_gallery_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'Urban-gallery',
			'title'				=> __('Block Gallery'),
			'description'		=> __('Description'),
			'render_template'	=> 'inc/blocks/gutenberg/block-gallery.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'Urban' ),
		));
	}
}

add_action('acf/init', 'acf_urban_gallery_block');

?>