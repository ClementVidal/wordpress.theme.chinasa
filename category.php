<?php

get_template_part( '/inc/site', 'header' );

?>

<div chi-smooth-apparition id="chi-section-blog-archive" >
    <section chi-resize-to-full-screen>

<?php
if ( have_posts() ) :
?>

    <header class="page-header">
    	<?php
    		the_archive_title( '<h1 class="page-title">', '</h1>' );
    		the_archive_description( '<div class="taxonomy-description">', '</div>' );
    	?>
    </header><!-- .page-header -->

<?php
    while ( have_posts() ) {
        the_post();
    	get_template_part( '/inc/post', 'content' );
    }


    the_posts_pagination( array(
    	'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
    	'next_text'          => __( 'Next page', 'twentyfifteen' ),
    	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
    ) );
endif;

?>

    </section>
</div>

<?php
get_template_part( '/inc/site', 'footer' );
