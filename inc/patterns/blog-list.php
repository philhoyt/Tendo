<?php
return array(
	'title'      => __( 'Blog List', 'tendo' ),
	'categories' => array( 'tendo-query' ),
	'content'    => '<!-- wp:query {"queryId":9,"query":{"perPage":"9","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"width":"100%","height":"260px"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-title {"isLink":true} /-->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group"><!-- wp:paragraph -->
	<p>Published:</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:post-date /--></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group"><!-- wp:paragraph -->
	<p>Category:</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:post-terms {"term":"category"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
	<div class="wp-block-group"><!-- wp:paragraph -->
	<p>Tags:</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:post-terms {"term":"post_tag"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eread more\u003c/strong\u003e","showMoreOnNewLine":false} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:spacer {"height":32} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
	<!-- wp:query-pagination-previous /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query -->',
);
