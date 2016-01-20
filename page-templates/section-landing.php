<?php
/*
Template Name: Landing
*/
?>
<div  id="chi-section-landing" class="chi-visible">

    <section chi-resize-to-full-screen ng-cloak>

        <div chi-smooth-apparition id="chi-bg-shapes"></div>

        <header class="container">
            <div>
                <?php if ( get_theme_mod( 'chi_landing_page_image' ) ) : ?>
                    <img class="chi-round-img-300 center-block" src='<?php echo esc_url( get_theme_mod( 'chi_landing_page_image' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'chi_landing_page_logo' ) ) : ?>
                    <img class="chi-round-img-300 center-block" src='<?php echo esc_url( get_theme_mod( 'chi_landing_page_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                <?php endif; ?>
            </div>

            <h1>
                <?php echo get_theme_mod('chi_landing_page_title' ); ?>
            </h1>


            <h2>
                 <?php echo get_theme_mod('chi_landing_page_subtitle' ); ?>
            </h2>
        </header>

        <div>
            <?php echo $page->post_content;?>
        </div>

        <div class="chi-icon">
            <i class="fa fa-arrow-down" ></i>
        </div>

    </section>

</div>
