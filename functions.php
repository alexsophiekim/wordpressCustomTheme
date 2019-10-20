<?php

function addCustomThemeStyles(){
    wp_enqueue_style('customCSS', get_template_directory_uri() . '/assets/css/style.css', array(), '0.0.1', 'all');
};

add_action('wp_enqueue_scripts', 'addCustomThemeStyles');
