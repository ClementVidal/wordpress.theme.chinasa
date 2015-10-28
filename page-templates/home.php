<?php
/*
Template Name: Home
*/
?>

<?php
get_template_part( '/inc/site', 'header' );
get_template_part( '/inc/site', 'sidebar' );
get_template_part( '/inc/body', 'header' );

// We assume that this page will always display a single post
the_post();


get_template_part( '/inc/section', 'landing' );

// Display what is in Home page
echo "<div id=\"chi-section-"; echo $post->post_name; echo "\">";
echo "<h1>";
echo $post->post_title;
echo "</h1>";
the_content();
echo "</div>";

// Fetch all pages  which are childs to this one
$args = array(
	'parent' => $post->ID,
	'post_type' => 'page',
	'post_status' => 'publish',
	'sort_column' => 'menu_order'
);
$pages = get_pages($args);

// Display them
foreach( $pages as $page ) {
    echo "<div id=\"chi-section-"; echo $page->post_name; echo "\">";

    echo "<h1>";
    echo $page->post_title;
    echo "</h1>";

    echo $page->post_content;
    echo "</div>";
}


get_template_part( '/inc/body', 'footer' );
get_template_part( '/inc/site', 'footer' );
