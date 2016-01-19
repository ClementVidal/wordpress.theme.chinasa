<?php
/*
Template Name: Home
*/
?>

<?php

get_template_part( '/inc/site', 'header' );


// Fetch all pages  which are childs to this one
//
$args = array('parent' => $post->ID,'post_type' => 'page','post_status' => 'publish','sort_column' => 'menu_order');
$pages = get_pages($args);

// Display them
foreach( $pages as $page ) {
	$templatePath = get_post_meta( $page->ID, '_wp_page_template', true );
	if( $templatePath == "default" ) {
		include( "section-default.php");
	} else  {
		include( pathinfo( $templatePath ) ['basename'] );
	}
}

get_template_part( '/inc/site', 'footer' );
