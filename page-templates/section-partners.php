<?php
/*
Template Name: Partners
*/
?>

<div chi-smooth-apparition chi-class="chi-visible" id="chi-section-<?php echo $page->post_name;?>" >
    <section>
        <h1>
            <?php echo $page->post_title;?>
        </h1>

        <?php echo $page->post_content;?>
    </section>

    <section>
        <div class="container-fluid">

            <?php
            $args = array( 'post_type' => 'partner', 'posts_per_page' => -1 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) :
                $loop->the_post();
                ?>

            	<div class="col-lg-4 col-md-12">
            		<article chi-smooth-apparition chi-class="visible">
                		<?php the_post_thumbnail( array(200, 200) );?>
                        <div>
                            <span><?php the_title(); ?></span>
                			<p>
                			<?php the_content(); ?>
                			</p>
                        </div>
            		</article>
            	</div>

            <?php endwhile;?>

        </div>
    </section>
</div>
