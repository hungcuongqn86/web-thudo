<?php
function flexslider2()
{
    wp_enqueue_script('flexslider', get_stylesheet_directory_uri() . '/theme/plugin/flexslider/jquery.flexslider-min.js', array('jquery'));
    wp_enqueue_script('flexslider-option', get_stylesheet_directory_uri() . '/theme/plugin/flexslider/flexslider-option.js', array('jquery'));
    wp_enqueue_style('flexslider-css', get_stylesheet_directory_uri() . '/theme/plugin/flexslider/flexslider.css');
}

add_action('wp_enqueue_scripts', 'flexslider2');