<?php
/*
Template Name: Landing
*/
?>
<div  id="chi-section-landing" class="chi-visible">

    <section chi-resize-to-full-screen>

        <div chi-smooth-apparition id="chi-bg-shapes">

        </div>
        <div>
            <header>

                    <div>
                        <img src="http://clement-vidal.fr.dev/wp-content/uploads/2015/11/profile_picture_1.png"
                        alt="Clement Vidal Developeur Web Freelance Marseille Aix"
                        class="chi-round-img-300 center-block alignnone size-full wp-image-120">
                        <img src="http://clement-vidal.fr.dev/wp-content/uploads/2015/12/logo.svg"
                        alt="Clement Vidal Developeur Web Freelance Marseille Aix"
                        class="chi-round-img-300">
                    </div>

                    <h1>
                        <?php the_author_meta('first_name'); ?>

                        <?php the_author_meta('last_name'); ?>
                    </h1>



            </header>


            <h2>
                &laquo; <?php echo get_bloginfo( 'description' ); ?>  &raquo;
            </h2>
        </div>

        <div>
            <?php echo $page->post_content;?>
        </div>

        <div class="chi-icon">
            <i class="fa fa-arrow-down" ></i>
        </div>


    </section>

</div>
