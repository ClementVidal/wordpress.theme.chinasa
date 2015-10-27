<?php
/*
Template Name: Blog
*/
?>

<?php

// We assume that this page will always display a single post
the_post();


echo '<div id="chi-blog">';

the_title();
the_content();

// Display all posts
$recent_posts = wp_get_recent_posts( );

echo '<ul>';
foreach( $recent_posts as $recent ){
	echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
}
echo '</ul>';


echo '</div>';
