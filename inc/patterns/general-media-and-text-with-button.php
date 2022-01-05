<?php
return array(
	'title'      => __( 'Media and text with button', 'tendo' ),
	'categories' => array( 'tendo-general' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2vw","right":"2vw","bottom":"2vw","left":"2vw"}}},"backgroundColor":"black","textColor":"white"} -->
	<div class="wp-block-group alignwide has-white-color has-black-background-color has-text-color has-background" style="padding-top:2vw;padding-right:2vw;padding-bottom:2vw;padding-left:2vw"><!-- wp:media-text {"mediaPosition":"right","mediaId":25,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/media-image.jpg","mediaType":"image","imageFill":false} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/media-image.jpg" alt="" class="wp-image-25 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"italic","fontWeight":"900"}}} -->
	<h1 id="lorem" style="font-style:italic;font-weight:900">Lorem</h1>
	<!-- /wp:heading -->
	
	<!-- wp:heading -->
	<h2 id="duis-aute-irure-dolor-in-reprehenderit">Duis aute irure dolor in reprehenderit</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"black","textColor":"white","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"1em","right":"1em","bottom":"1em","left":"1em"}}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background" style="border-radius:0px;padding-top:1em;padding-right:1em;padding-bottom:1em;padding-left:1em">Click Here</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"style":{"border":{"radius":"100px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="" style="border-radius:100px" target="_blank" rel="noreferrer noopener">Download</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->
	
	<!-- wp:spacer {"height":"16px"} -->
	<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
);
