<div id="chi-sidebar">

<!--
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
-->

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
        <a href="https://github.com/ClementVidal"><i class="fa fa-github"></i></a>
        <a href="https://fr.linkedin.com/pub/clement-vidal/6/413/147"><i class="fa fa-linkedin"></i></a>
        <a href="https://twitter.com/_clementvidal_"><i class="fa fa-twitter"></i></a>
        <a href="<?php bloginfo('rss2_url');?>"><i class="fa fa-rss"></i></a>
    </div>

</div>
