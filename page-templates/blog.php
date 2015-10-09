<?php
/*
Template Name: Blog
*/
?>

<?php get_template_part( '/inc/site', 'header' ); ?>
<?php get_template_part( '/inc/site', 'sidebar' ); ?>


<?php get_template_part( '/inc/body', 'header' ); ?>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();

            the_title();
            the_content();
        endwhile;
    else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

<?php get_template_part( '/inc/body', 'footer' ); ?>

<?php get_template_part( '/inc/site', 'footer' ); ?>
