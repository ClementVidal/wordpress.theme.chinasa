<div id="chi-sidebar">

    <div class="chi-sidebar-bloc chi-sidebar-top">

    </div>
    <div class="chi-sidebar-shear chi-sidebar-top"></div>

    <img src="http://clement-vidal.fr.dev/wp-content/uploads/2015/12/logo-dark.svg"
    alt="Clement Vidal Developeur Web Freelance Marseille Aix"
    class="chi-sidebar-logo">

    <div class="chi-sidebar-content">



        <?php $locations = get_nav_menu_locations(); ?>
        <ul id="accordion" role="tablist" class="chi-sidebar-menu">
            <?php
            $menu_name = 'primary';
            if( array_key_exists( $menu_name, $locations ) && $locations[ $menu_name ] ) :
                $menu_id = $locations[ $menu_name ] ;
                $menu=wp_get_nav_menu_object($menu_id);
             ?>

            <li class="panel panel-default">
                <div role="tab" id="headingOne">
                    <a  du-scrollspy  data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                        data-href-hidden="#collapseOne" data-href-shown="#chi-section-landing">
                            <?php echo $menu->name; ?>
                    </a>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel">
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
            </li>
            <?php endif;?>

            <?php
            $menu_name = 'secondary';
            if( array_key_exists( $menu_name, $locations ) && $locations[ $menu_name ] ) :
                $menu_id = $locations[ $menu_name ] ;
                $menu=wp_get_nav_menu_object($menu_id);
             ?>
            <li class="panel panel-default">
                <div role="tab" id="headingTwo">
                    <a  du-scrollspy data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                        data-href-hidden="#collapseTwo" data-href-shown="#chi-section-landing">
                            <?php echo $menu->name; ?>
                    </a>
                </div>
                <div id="collapseTwo" class=" panel-collapse collapse" role="tabpanel">
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
            </li>
            <?php endif;?>

        </ul>



    </div>

    <div class="chi-sidebar-shear chi-sidebar-bottom"></div>
    <div class="chi-sidebar-bloc chi-sidebar-bottom">
        <div class='chi-sidebar-foot'>
            <a href="<?php echo get_theme_mod('chi_social_github');?>"><i class="fa fa-github"></i></a>
            <a href="<?php echo get_theme_mod('chi_social_linkedin');?>"><i class="fa fa-linkedin"></i></a>
            <a href="<?php echo get_theme_mod('chi_social_twitter');?>"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo get_theme_mod('chi_social_pinterest');?>"><i class="fa fa-pinterest"></i></a>
        </div>
    </div>

</div>
