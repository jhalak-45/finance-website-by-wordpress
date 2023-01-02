<?php
function init_theme_widgets()
{

    // ads one
    register_sidebar(array(
        'name' => ' Ads One',
        'id' => 'ads-one',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="contact-title">',
        'after_title' => '</h3>',
        'description' => 'Ads One widgets'
    ));

    // ads two
    register_sidebar(array(
        'name' => ' Ads Two',
        'id' => 'ads-two',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="contact-title">',
        'after_title' => '</h3>',
        'description' => 'Ads Two widgets'
    ));

    // ads three
    register_sidebar(array(
        'name' => ' Ads Three',
        'id' => 'ads-three',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="contact-title">',
        'after_title' => '</h3>',
        'description' => 'Ads Three widgets'
    ));

    // ads four
    register_sidebar(array(
        'name' => ' Ads Four',
        'id' => 'ads-four',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="contact-title">',
        'after_title' => '</h3>',
        'description' => 'Ads Four widgets'
    ));
}

add_action('widgets_init', 'init_theme_widgets');
