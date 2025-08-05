<?php
add_theme_support('post-thumbnails');
register_nav_menus(['Menu-Key' => 'Home Menu']);

function my_enqueue_style(){
    wp_enqueue_style('style',get_stylesheet_uri());
} 
Add_action('wp_enqueue_scripts','my_enqueue_style');


?>