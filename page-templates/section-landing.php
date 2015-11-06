<?php
/*
Template Name: Landing
*/
?>
<div chi-resize-to-full-screen id="chi-section-landing" class="chi-visible">

    <section>

        <header>

            <div>
                <?php if ( get_theme_mod( 'chi_logo' ) ) : ?>
                <img src='<?php echo esc_url( get_theme_mod( 'chi_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                <?php endif; ?>

                <span>
                    <h1>
                        <?php the_author_meta('first_name'); ?>
                    </h1>
                    <h1>
                        <?php the_author_meta('last_name'); ?>
                    </h1>
                </span>
            </div>

            <h2>
                Developeur Web avec une affection pour le design
            </h2>

        </header>


    </section>
</div>
<div class="chi-section-sep"></div>
