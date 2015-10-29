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

?>

<?php// Display what is in Home page?>
<section id="chi-section-<?php echo $post->post_name;?>" >
	<h1>
		<?php echo $post->post_title;?>
	</h1>
	<div>
		<?php the_content();?>
	</div>
</section>
<div class="chi-section-sep"></div>


<?php
// Fetch all pages  which are childs to this one
$args = array('parent' => $post->ID,'post_type' => 'page','post_status' => 'publish','sort_column' => 'menu_order');
$pages = get_pages($args);

// Display them
foreach( $pages as $page ):
?>

	<section id="chi-section-<?php echo $page->post_name;?>" >
		<h1>
			<?php echo $page->post_title;?>
		</h1>
		<div>
			<?php echo $page->post_content;?>
		</div>
	</section>
	<div class="chi-section-sep"></div>

<?php
endforeach;

get_template_part( '/inc/body', 'footer' );
get_template_part( '/inc/site', 'footer' );
