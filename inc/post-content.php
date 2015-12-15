<div chi-smooth-apparition id="chi-section-blog-archive" >
	<section>
		<article id="chi-post-<?php the_ID(); ?>" >

			<header >
				<?php
		        if ( is_single() ) {
		        	the_title( '<h1 class="entry-title">', '</h1>' );
		        } else {
		            the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		        }
				?>
			</header>

			<div>
				<?php
					the_content( sprintf(
						__( 'Continue reading %s', 'twentyfifteen' ),
						the_title( '<span class="screen-reader-text">', '</span>', false )
					) );
					wp_link_pages( array(
						'before'      => '<div><span>' . __( 'Pages:', 'chi' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span>' . __( 'Page', 'chi' ) . ' </span>%',
						'separator'   => '<span>, </span>',
					) );
				?>
			</div>


			<footer >
				<?php edit_post_link( __( 'Edit', 'chi' ), '<span class="chi-edit-link">', '</span>' ); ?>
			</footer>

		</article>
	</section>
</div>
