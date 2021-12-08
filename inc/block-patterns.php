<?php
/**
 * Tendo: Block Patterns
 */

/**
 * Registers block patterns and categories.
 */
function tendo_register_block_patterns() {
	$block_pattern_categories = array(
		'tendo-general' => array( 'label' => __( 'Tendo General', 'tendo' ) ),
		'tendo-pages' => array( 'label' => __( 'Tendo Pages', 'tendo' ) ),
		'tendo-query'   => array( 'label' => __( 'Tendo Blogs', 'tendo' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 */
	$block_pattern_categories = apply_filters( 'tendo_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		'blog-compact',
		'blog-featured',
		'blog-grid',
		'blog-list',
		'pages-portfolio-grid',
		'pages-links'
	);

	/**
	 * Filters the theme block patterns.
	 */
	$block_patterns = apply_filters( 'tendo_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'tendo/' . $block_pattern,
			require __DIR__ . '/patterns/' . $block_pattern . '.php'
		);
	}
}
add_action( 'init', 'tendo_register_block_patterns', 9 );
