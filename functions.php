<?php
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
add_theme_support( 'post-thumbnails', array( 'skill', 'partner', 'portfolio_entry' ) );
require get_template_directory() . '/inc/functions/bootstrap_menuwalker.php';
require get_template_directory() . '/inc/functions/enqueue_scripts.php';
require get_template_directory() . '/inc/functions/register_menu.php';
require get_template_directory() . '/inc/functions/register_widgets.php';
require get_template_directory() . '/inc/functions/register_custom_post_type.php';
require get_template_directory() . '/inc/functions/register_customizer_section.php';
require get_template_directory() . '/inc/functions/filters.php';
require get_template_directory() . '/inc/functions/meta_box.php';
