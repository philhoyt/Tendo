<?php
return array(
	'title'      => __( 'Logo, Menu, and Social', 'tendo' ),
	'categories' => array( 'tendo-headers' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"1em","right":"1em","bottom":"1em","left":"1em"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="padding-top:1em;padding-right:1em;padding-bottom:1em;padding-left:1em"><!-- wp:site-title /-->
	
	<!-- wp:navigation {"ref":11,"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"typography":{"fontStyle":"italic","fontWeight":"700","textTransform":"lowercase"}},"fontFamily":"arial-helvetica"} /-->
	
	<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000000","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"#","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"#","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group -->',
);
