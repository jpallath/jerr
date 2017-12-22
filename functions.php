<?php
function wp_resources(){
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'wp_resources');

// Nav Menus
register_nav_menus(array(
  'primary' => __( 'Primary Menu')
));
?>
