<?php
// navwalker registration for navbar
// require_once get_template_directory() . '/includes/widgets/theme_widgets.php';

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
add_theme_support('menu');

if (!function_exists('theme_enquee_scripts')) {
    function theme_enquee_scripts()
    {
        //css
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

        wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');

        wp_enqueue_style('all', get_template_directory_uri() . '/fonts/css/all.css');
        wp_enqueue_style('script', get_template_directory_uri() . '/script.js');

        //functions to link booktstrap,JS and jquery
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_script('jQuery', get_template_directory_uri() . '/js/jquery-min.js');
        wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
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
        'secondary' => __('Secondary Menu', 'footer menu'),
        'sidebar' => __('Sidebar Menu', 'sidebar menu'),


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

// add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 3);

//         function add_additional_class_on_li($classes, $item, $args)
//         {
//             if (isset($args->add_li_class))
//             {
//                 $classes[] = $args->add_li_class;
//             }
//             return $classes;
//         }
         
//         // A tags

//         add_filter( 'nav_menu_link_attributes', 'add_link_atts');

//         function add_link_atts($atts) 
//         { 
//              $atts['class'] = "nav-link"; 
//              return $atts;
//         } 


// multiple sidebar register 
function my_widgets() {

    //Register Sidebar #1
    
    register_sidebar(
       array(
           'name' => __( 'Sidebar ', 'textdomain' ),
           'id' => 'sidebar-1',
          'description' => __( 'Add widgets here to appear in your sidebar 1.', 'textdomain' ),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>',
      )
    );
    
    //Register Sidebar #2
    
    register_sidebar(
       array(
           'name' => __( 'footer 1', 'textdomain' ),
            'id' => 'footer-1',
            'description' => __( 'Add widgets here to appear in your sidebar 2.', 'textdomain' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
           'after_title' => '</h2>',
         )
    );
    
    //Register Sidebar #3
    
    register_sidebar(
       array(
           'name' => __( 'footer 2', 'textdomain' ),
           'id' => 'footer-2',
           'description' => __( 'Add widgets here to appear in your sidebar 3.', 'textdomain' ),
           'before_widget' => '<section id="%1$s" class="widget %2$s">',
           'after_widget' => '</section>',
           'before_title' => '<h2 class="widget-title">',
           'after_title' => '</h2>',
          )
       );
    
    }
    add_action( 'widgets_init', 'my_widgets');
function cptui_register_my_cpts()
{

    /**
     * Post Type: programs.
     */

    $labels = [
        "name" => __("programs", "custom-post-type-ui"),
        "singular_name" => __("program", "custom-post-type-ui"),
    ];

    $args = [
        "label" => __("programs", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "program", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail"],
        "show_in_graphql" => false,
    ];

    register_post_type("program", $args);
	}

add_action('init', 'cptui_register_my_cpts');


	/**
	 * Post Type:  committes.
	 */

	$labels = [
		"name" => __( " committes", "custom-post-type-ui" ),
		"singular_name" => __( "Committe", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( " committes", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "committe", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "committe", $args );

	/**
	 * Post Type: staffs.
	 */

	$labels = [
		"name" => __( "staffs", "custom-post-type-ui" ),
		"singular_name" => __( "staff", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "staffs", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "staff", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "staff", $args );

	/**
	 * Post Type: ongoing programs.
	 */

	$labels = [
		"name" => __( "ongoing programs", "custom-post-type-ui" ),
		"singular_name" => __( "ongoing program", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "ongoing programs", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "ongoing_program", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "ongoing_program", $args );

	/**
	 * Post Type: Past programs.
	 */

	$labels = [
		"name" => __( "Past programs", "custom-post-type-ui" ),
		"singular_name" => __( "Past Program", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Past programs", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "past_program", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "past_program", $args );

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_cpts_committe() {

	/**
	 * Post Type:  committes.
	 */

	$labels = [
		"name" => __( " committes", "custom-post-type-ui" ),
		"singular_name" => __( "Committe", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( " committes", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "committe", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "committe", $args );
}

add_action( 'init', 'cptui_register_my_cpts_committe' );

function cptui_register_my_cpts_staff() {

	/**
	 * Post Type: staffs.
	 */

	$labels = [
		"name" => __( "staffs", "custom-post-type-ui" ),
		"singular_name" => __( "staff", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "staffs", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "staff", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "staff", $args );
}

add_action( 'init', 'cptui_register_my_cpts_staff' );

function cptui_register_my_cpts_ongoing_program() {

	/**
	 * Post Type: ongoing programs.
	 */

	$labels = [
		"name" => __( "ongoing programs", "custom-post-type-ui" ),
		"singular_name" => __( "ongoing program", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "ongoing programs", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "ongoing_program", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "ongoing_program", $args );
}

add_action( 'init', 'cptui_register_my_cpts_ongoing_program' );

function cptui_register_my_cpts_past_program() {

	/**
	 * Post Type: Past programs.
	 */

	$labels = [
		"name" => __( "Past programs", "custom-post-type-ui" ),
		"singular_name" => __( "Past Program", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Past programs", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "past_program", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "past_program", $args );
}

add_action( 'init', 'cptui_register_my_cpts_past_program' );
