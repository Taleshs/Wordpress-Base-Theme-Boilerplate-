<?php

function acf_urban_repeater_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'Urban-repeater',
			'title'				=> __('Repeater Content'),
			'description'		=> __('Description'),
			'render_template'	=> 'inc/blocks/gutenberg/block-repeater.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'Urban' ),
		));
	}
}

add_action('acf/init', 'acf_urban_repeater_block');

?>