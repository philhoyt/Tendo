<?php
if ( function_exists( 'register_block_style' ) ) {

	function tendo_register_block_styles() {
		// Image: Arched
		register_block_style(
			'core/image',
			array(
				'name'  => 'tendo-image-arched',
				'label' => esc_html__( 'Arched', 'tendo' ),
			)
		);

		// Image: Drop Shadow
		register_block_style(
			'core/image',
			array(
				'name'  => 'tendo-image-dropshadow',
				'label' => esc_html__( 'Drop Shadow', 'tendo' ),
			)
		);
	}
	add_action( 'init', 'tendo_register_block_styles' );
}
