<?php if ( function_exists('yoast_breadcrumb') ) {
	/* Display Yoast Breadcrumbs (boostrap) */
	$breadcrumbs = yoast_breadcrumb( '<ol class="breadcrumb"><li>', '</li></ol>', false );
	echo $breadcrumbs;
} ?>