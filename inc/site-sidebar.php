<div id="chi-sidebar">

    <div class='chi-sidebar-head'>
        <?php if (get_theme_mod('chi_logo')) : ?>

            <a href='<?php echo esc_url(home_url('/')); ?>' title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'>
                <img src='<?php echo esc_url(get_theme_mod('chi_logo')); ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'>
            </a>

        <?php else : ?>
            <h1>
                <a href='<?php echo esc_url(home_url('/')); ?>' title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'><?php bloginfo('name'); ?></a>
            </h1>
        
        <?php endif; ?>
    </div>

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
    <div class='chi-sidebar-foot'>
        <i class="fa fa-github-square"></i>
        <i class="fa fa-linkedin-square"></i>
        <i class="fa fa-twitter-square"></i>
        <i class="fa fa-rss-square"></i>
    </div>

</div>
