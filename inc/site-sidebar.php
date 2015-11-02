<div id="chi-sidebar">


    <div class='chi-sidebar-menu'>
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
    </div>

    <div class='chi-sidebar-foot'>
        <a href="<?php echo get_theme_mod( 'chi_social_github' );?>"><i class="fa fa-github"></i></a>
        <a href="<?php echo get_theme_mod( 'chi_social_linkedin' );?>"><i class="fa fa-linkedin"></i></a>
        <a href="<?php echo get_theme_mod( 'chi_social_twitter' );?>"><i class="fa fa-twitter"></i></a>
        <a href="<?php bloginfo('rss2_url');?>"><i class="fa fa-rss"></i></a>
    </div>

</div>
