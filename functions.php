<?php

function addCustomThemeFiles_1902(){
    wp_enqueue_style('bootstrapCSS1902', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customCSS1902', get_template_directory_uri() . '/assets/css/style.css', array(), '0.0.2', 'all');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapJS1902', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('customJS1902', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '0.0.1', true);
};


add_action('wp_enqueue_scripts', 'addCustomThemeFiles_1902');

add_image_size('icon',50 ,50 ,true);

function addCustomMenus_1902(){
    add_theme_support('menus');
    // register_nav_menu('top navigation', 'The top navigation is located at the top of each page.');
    register_nav_menu( 'top_navigation', __( 'The top navigation is located at the top of each page.', '1902Custom' ) );
    register_nav_menu( 'footer_navigation', __( 'The footer navigation is located at the bottom of each page.', '1902Custom' ) );
    register_nav_menu( 'side_navigation', __( 'The side navigation is located on the left of the page.', '1902Custom' ) );
    //register_nave_menu both of them is exactly same but under one is more specific. If you have many data, many theme, wordpress will confuse; It could be causing issue;
}

add_action('after_setup_theme', 'addCustomMenus_1902');

register_default_headers(array(
    'defaultImage' => array(
        'url' => get_template_directory_uri() . '/assets/images/bg.jpg',
        'thumbnail_url' => get_template_directory_uri() . '/assets/images/bg.jpg',
        'description' => __('The default image for the custom header.', '1902Custom')
    )
));

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

$customHeaderDefaults = array(
    'width' => 1280,
	'height' => 720,
    'default-image' => get_template_directory_uri() . '/assets/images/bg.jpg'
);


add_theme_support( 'post-thumbnails', array('post', 'movie') );
add_theme_support('custom-header', $customHeaderDefaults);
add_theme_support('wp-block-styles');


add_theme_support('post-formats', array('video','audio','image','gallery'));

function add_custom_post_types(){
    $args = array(
        'labels' => array(
            'name' => 'Movies',
            'singular_name' => 'Movie',
            'add_new_item' => 'Add New Movie'
        ),
        'description' => 'A list of all the movies we have in our website',
        'public' => true,
        'hierarchical' => true,
        'show_in_nav_menus' => false,
        'show_in_rest' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'post-formats'
        ),
        'delete_with_user' => false
    );
    register_post_type('movie', $args);
}

add_action('init', 'add_custom_post_types');


require_once get_template_directory() . '/inc/customizer.php';
