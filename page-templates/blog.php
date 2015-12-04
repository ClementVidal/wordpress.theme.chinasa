<?php
/*
Template Name: Blog
*/
?>

<?php
get_template_part( '/inc/site', 'header' );

// We assume that this page will always display a single post
the_post();

?>
<div chi-smooth-apparition id="chi-section-blog-header" >

	<section>
		<h1> <?php the_title(); ?> </h1>
		<p><?php the_content(); ?></p>
	</section>
</div>


<?php
$recent_posts = wp_get_recent_posts( );
foreach( $recent_posts as $recent ): ?>

	<div chi-smooth-apparition id="chi-section-blog-post" >
		<section>
			<h1> <?php echo $recent["post_title"]; ?> </h1>
			<p><?php echo $recent["post_content"]; ?></p>

		</section>
	</div>

<?php   endforeach; ?>



<?php get_template_part( '/inc/site', 'footer' ); ?>
