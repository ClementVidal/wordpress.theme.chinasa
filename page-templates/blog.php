<?php
/*
Template Name: Blog
*/
?>

<?php
get_template_part( '/inc/site', 'header' );
get_template_part( '/inc/site', 'sidebar' );

get_template_part( '/inc/body', 'header' );

// We assume that this page will always display a single post
the_post();
the_title();
the_content();

// Display all posts
$recent_posts = wp_get_recent_posts( );

echo '<ul>';
foreach( $recent_posts as $recent ){
	echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
}
echo '</ul>';

get_template_part( '/inc/body', 'footer' );
get_template_part( '/inc/site', 'footer' );
