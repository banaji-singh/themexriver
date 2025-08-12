<?php
add_theme_support('post-thumbnails');
register_nav_menus(['Menu-Key' => 'Home Menu']);

function my_enqueue_style(){
    wp_enqueue_style('style',get_stylesheet_uri());
} 
Add_action('wp_enqueue_scripts','my_enqueue_style');

function load_front_page_styles() {
    wp_enqueue_style('hero-style', get_template_directory_uri() . '/css/front-page/section1.css');
    wp_enqueue_style('about-style', get_template_directory_uri() . '/css/front-page/section2.css');
    wp_enqueue_style('services-style', get_template_directory_uri() . '/css/front-page/section3.css');
    wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/css/front-page/section4.css');
    wp_enqueue_style('testimonials-style', get_template_directory_uri() . '/css/front-page/section5.css');
    wp_enqueue_style('contact-style', get_template_directory_uri() . '/css/front-page/section6.css');
    wp_enqueue_style('contact-form', get_template_directory_uri() . '/css/front-page/section7.css');
    wp_enqueue_style('section8', get_template_directory_uri() . '/css/front-page/section8.css');
}
add_action('wp_enqueue_scripts', 'load_front_page_styles');

?>