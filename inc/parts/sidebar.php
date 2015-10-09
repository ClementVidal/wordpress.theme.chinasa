<div id="chi-sidebar">


    <?php if ( get_theme_mod( 'chi_logo' ) ) : ?>
        <div class='chi-head'>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                <img src='<?php echo esc_url( get_theme_mod( 'chi_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
            </a>
        </div>
    <?php else : ?>
        <hgroup class='chi-head'>
            <h1>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
            </h1>
            <h2 >
                <?php bloginfo( 'description' ); ?>
            </h2>
        </hgroup>
    <?php endif; ?>


    <?php


$defaults = array(
	'menu'            => 'primary',
	'menu_class'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'container'       => '',
	'depth'           => 0
);

wp_nav_menu( $defaults );
    ?>
</div>
