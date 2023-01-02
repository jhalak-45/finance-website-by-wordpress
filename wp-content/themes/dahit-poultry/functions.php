<?php
//navwalker registration for navbar
require_once get_template_directory() . '/includes/widgets/theme_widgets.php';

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


if (!function_exists('theme_enquee_scripts'))
{
    function theme_enquee_scripts()
    {
        //css
        wp_enqueue_style('css', get_template_directory_uri() . '/css/style.css');
        wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/css/all.css');

        //functions to link booktstrap,JS and jquery
        wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css');
        wp_enqueue_script( 'jQuery', get_template_directory_uri(). '/js/jquery-3.6.0.min.js');
        wp_enqueue_script( 'bootstrap_JS', get_template_directory_uri().'/js/bootstrap.min.js');

        
    }
}
add_action('wp_enqueue_scripts', 'theme_enquee_scripts');


//menu
//Functions for creating menus 
add_theme_support('menus');
function wp_theme_setup()
{
   
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'primary menu'),
        'mobile-menu' => __('Mobile Menu Location', 'Mobile Menu'),
    ));
}
add_action('after_setup_theme', 'wp_theme_setup');
add_theme_support('post-thumbnails');

//functions for brand logo

// site icon
function themename_custom_logo_setup()
{
    $defaults = array(
        'height'      => 120,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

function custom_excerpt()
{
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 450);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));
    $excerpt = $excerpt . '... <a href="' . get_the_permalink() . '"></a>';
    return $excerpt;
}
