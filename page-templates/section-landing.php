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
                        <?php if ( get_theme_mod( 'chi_image' ) ) : ?>
                            <img class="chi-round-img-300 center-block " src='<?php echo esc_url( get_theme_mod( 'chi_landing_page_image' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                        <?php endif; ?>

                        <?php if ( get_theme_mod( 'chi_logo' ) ) : ?>
                            <img class="center-block " src='<?php echo esc_url( get_theme_mod( 'chi_landing_page_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                        <?php endif; ?>
                    </div>

                    <h1>
                        <?php echo get_theme_mod('chi_landing_page_title' ); ?>
                    </h1>



            </header>


            <h2>
                &laquo; <?php echo get_theme_mod('chi_landing_page_subtitle' ); ?> &raquo;
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
