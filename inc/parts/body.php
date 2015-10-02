<?php


if( is_single() ) {
    require get_template_directory() . '/inc/parts/single.php';
}
else {
    require get_template_directory() . '/inc/parts/default.php';
}
