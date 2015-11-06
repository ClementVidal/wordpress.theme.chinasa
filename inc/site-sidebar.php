<div id="chi-sidebar">

    <div class='chi-sidebar-head'>
        <?php if ( get_theme_mod( 'chi_logo' ) ) : ?>
        <img src='<?php echo esc_url( get_theme_mod( 'chi_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
        <?php endif; ?>
    </div>

    <nav class='chi-sidebar-menu'>
    <?php
    $defaults = array(
        'menu' => 'primary',
        'menu_class' => '',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'container' => '',
        'depth' => 0,
    );

    wp_nav_menu($defaults);
    ?>
    </nav>

    <div class='chi-sidebar-foot'>
        <a href="<?php echo get_theme_mod( 'chi_social_github' );?>"><i class="fa fa-github"></i></a>
        <a href="<?php echo get_theme_mod( 'chi_social_linkedin' );?>"><i class="fa fa-linkedin"></i></a>
        <a href="<?php echo get_theme_mod( 'chi_social_twitter' );?>"><i class="fa fa-twitter"></i></a>
        <a href="<?php bloginfo('rss2_url');?>"><i class="fa fa-rss"></i></a>
    </div>

</div>
