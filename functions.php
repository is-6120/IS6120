<?php 
if(!function_exists('is6120_setup')):
    function is6120_setup() {
        load_theme_textdomain( 'IS6120', get_template_directory() . '/languages' );
        add_theme_support('title-tag');
        register_nav_menus(
            array('primary' => __('Primary','IS6120'),
                'footer' => __('Footer','IS6120'),
                'social' => __('Social','IS6120'),
            )
        );
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    
    add_theme_support(
        'html5',
        array('search-form','comment-form','comment-list','gallery','caption')
        );
    
    add_theme_support(
        'custom-logo',
        array('height' => 190, 'width' => 190, 'flex-width' => false, 'flex-height' => false,
        )
    );
    add_theme_support('align-wide');
}
endif;

add_action('after_setup_theme', 'is6120_setup');

function is6120_script_enqueue() {
    wp_enqueue_style('is6120style', get_template_directory_uri().'/css/is6120', array(),'1.0.0', 'all');
    wp_enqueue_script('is6120js', get_template_directory_uri().'/js/is6120.js', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'is6120_script_enqueue');

