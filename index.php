<?php

get_template_part( '/inc/site', 'header' );
get_template_part( '/inc/site', 'sidebar' );

get_template_part( '/inc/body', 'header' );

echo "<div ui-view> </div>";

get_template_part( '/inc/body', 'footer' );
get_template_part( '/inc/site', 'footer' );
