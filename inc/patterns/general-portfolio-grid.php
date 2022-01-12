<?php
return array(
	'title'      => __( 'Portfolio Grid', 'tendo' ),
	'categories' => array( 'tendo-general' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading -->
	<h2 id="lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</em></h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"level":3} -->
	<h3 id="vivamus-a-bibendum-nisi">Vivamus a bibendum nisi.</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>Nam imperdiet nunc id erat maximus, ac pharetra lorem scelerisq ue.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:spacer {"height":"32px"} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:paragraph -->
	<p>Nec ultrices dui sapien eget. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Elit sed vulputate mi sit amet mauris commodo. Nunc sed augue lacus viverra. Porttitor rhoncus dolor purus non. Tellus orci ac auctor augue mauris augue. Aliquam eleifend mi in nulla posuere sollicitudin. In mollis nunc sed id semper risus in hendrerit. Pharetra magna ac placerat vestibulum lectus. Dignissim cras tincidunt lobortis feugiat. Ipsum consequat nisl vel pretium lectus quam id leo.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link">CLICK HERE.</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":227,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/grid-1.jpg" alt="' . esc_attr__( 'Holding Balloons captured on Instant Film', 'tendo' ) . '"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"id":31,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/grid-2.jpg" alt="' . esc_attr__( 'Graffiti X', 'tendo' ) . '"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":28,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/grid-3.jpg" alt="' . esc_attr__( 'Red Cloud', 'tendo' ) . '"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"id":29,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/grid-4.jpg" alt="' . esc_attr__( 'Graffiti of Stick Figure and Heart', 'tendo' ) . '"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
