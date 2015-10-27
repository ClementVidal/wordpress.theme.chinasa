<?php
/*
Template Name: Portfolio
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

get_template_part( '/inc/body', 'footer' );
get_template_part( '/inc/site', 'footer' );
