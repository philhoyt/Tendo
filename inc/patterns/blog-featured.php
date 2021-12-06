<?php
return array(
	'title'      => __( 'Blog Featured', 'tendo' ),
	'categories' => array( 'tendo-query' ),
	'content'    => '<!-- wp:query {"queryId":33,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":"full"} -->
	<div class="wp-block-query alignfull"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"320px","align":"wide"} /-->
	
	<!-- wp:post-title {"isLink":true} /-->
	
	<!-- wp:post-date /-->
	
	<!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eread more\u003c/strong\u003e"} /-->
	<!-- /wp:post-template --></div>
	<!-- /wp:query -->',
);
