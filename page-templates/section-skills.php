<?php
/*
Template Name: Skills
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
        <ul>

            <?php
            $args = array( 'post_type' => 'skill', 'posts_per_page' => -1 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) :
                $loop->the_post();
                ?>

                <li chi-smooth-apparition chi-class="visible">
                    <?php the_post_thumbnail( array(50, 50) );?>
                    <h3> <?php the_title(); ?> </h3>
                    <div>
                        <?php

                        // Loop over each stars
                        $level = get_post_meta( get_the_ID(), 'chi_skill_level', true );
                        $maxLevel = 6;

                        if($level > $maxLevel ) $level = $maxLevel;
                        if($level < 0 ) $level = 0;

                        for( $i=1; $i<=$level; $i++ ){
                            echo '<i class="fa fa-star"></i>';
                        }
                        for( $i=$level+1; $i<=$maxLevel; $i++ ){
                            echo '<i class="fa fa-star-o"></i>';
                        }

                        ?>
                    </div>
                </li>

            <?php endwhile;?>

        </ul>
    </section>
</div>
<div class="chi-section-sep"></div>
