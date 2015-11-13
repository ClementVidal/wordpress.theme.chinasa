<?php
/*
Template Name: Landing
*/
?>
<div  id="chi-section-landing" class="chi-visible">

    <section chi-resize-to-full-screen>

        <div>
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

            </header>


            <h2>
                &laquo; Developeur Web avec une affection pour le design &raquo;
            </h2>
        </div>

        <div>
            <i class="fa fa-arrow-down" ></i>
        </div>


    </section>

</div>
