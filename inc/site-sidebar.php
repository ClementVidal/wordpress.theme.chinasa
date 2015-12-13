<div id="chi-sidebar">

    <div class="chi-sidebar-bloc chi-sidebar-top">

    </div>
    <div class="chi-sidebar-shear chi-sidebar-top"></div>

    <img src="http://clement-vidal.fr.dev/wp-content/uploads/2015/12/logo-dark.svg"
    alt="Clement Vidal Developeur Web Freelance Marseille Aix"
    class="chi-sidebar-logo">

    <div class="chi-sidebar-content">

        <?php $locations = get_nav_menu_locations(); ?>
        <div chi-menu-container id="accordion" class="chi-menu-container">

            <?/*
            Test if primary menu exist,
            and display it*/?>
            <?php
            $menu_name = 'primary';
            if( array_key_exists( $menu_name, $locations ) && $locations[ $menu_name ] ) :
                $menu_id = $locations[ $menu_name ] ;
                $menu=wp_get_nav_menu_object($menu_id);
             ?>
            <div class="chi-menu panel panel-default">
                <a id="headingOne" data-toggle="collapse" data-parent="#accordion"
                    du-scrollspy  href="#collapseOne"
                    data-href-hidden="#collapseOne" data-href-shown="#chi-section-landing">
                        <?php echo $menu->name; ?>
                </a>
                <div id="collapseOne" class="collapse in">
                    <?php
                    $defaults = array(
                        'theme_location' => $menu_name,
                        'menu_class' => '',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'container' => '',
                        'depth' => 0,
                    );
                    wp_nav_menu($defaults);
                    ?>
                </div>
            </div>
            <?php endif;?>

            <?/*
            Test if secondary menu exist,
            and display it*/?>
            <?php
            $menu_name = 'secondary';
            if( array_key_exists( $menu_name, $locations ) && $locations[ $menu_name ] ) :
                $menu_id = $locations[ $menu_name ] ;
                $menu=wp_get_nav_menu_object($menu_id);
             ?>
            <div class="chi-menu panel">
                <a id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                class="chi-menu-header" du-scrollspy data-href-hidden="#collapseTwo" data-href-shown="#chi-section-landing">
                        <?php echo $menu->name; ?>
                </a>
                <div id="collapseTwo" class="collapse">
                    <?php
                    $defaults = array(
                        'theme_location' => $menu_name,
                        'menu_class' => '',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'container' => '',
                        'depth' => 0,
                    );
                    wp_nav_menu($defaults);
                    ?>
                </div>
            </div>
            <?php endif;?>

        </div>



    </div>

    <div class="chi-sidebar-shear chi-sidebar-bottom"></div>
    <div chi-snap-to-viewport-bottom class="chi-sidebar-bloc chi-sidebar-bottom">
        <div class='chi-sidebar-foot'>
            <a href="<?php echo get_theme_mod('chi_social_github');?>"><i class="fa fa-github"></i></a>
            <a href="<?php echo get_theme_mod('chi_social_linkedin');?>"><i class="fa fa-linkedin"></i></a>
            <a href="<?php echo get_theme_mod('chi_social_twitter');?>"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo get_theme_mod('chi_social_pinterest');?>"><i class="fa fa-pinterest"></i></a>
        </div>
    </div>


</div>
