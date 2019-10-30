<?php

    function mytheme_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here
    $wp_customize->add_setting( '1902_backgroundColour' , array(
        'default'   => '#ef826d',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_backgroundColourControl', array(
    	'label'      => __( 'Background Colour', '1902Custom' ),
        'description' => 'Change the background colour',
    	'section'    => 'colors',
    	'settings'   => '1902_backgroundColour',
    ) ) );

    $wp_customize->add_setting( '1902_barColour' , array(
        'default'   => '#ef826d',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_barColourControl', array(
    	'label'      => __( 'Bar Colour', '1902Custom' ),
        'description' => 'Change the navbar and footer colour',
    	'section'    => 'colors',
    	'settings'   => '1902_barColour',
    ) ) );

    $wp_customize->add_section( '1902Custom_copyright' , array(
        'title'      => __('copyright','1902Custom'),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting('1902Custom_theme_copyright', array(
        'default'        => '1902Custom_theme',
        'transport'      => 'refresh',
    ) );

    $wp_customize->add_control('1902Custom_copyright', array(
       'label'      => __('copyright', '1902Custom'),
       'section'    => '1902Custom_copyright',
       'settings'   => '1902Custom_theme_copyright'
    ));

    }
    add_action( 'customize_register', 'mytheme_customize_register' );

    function mytheme_customize_css()
    {
        ?>
             <style type="text/css">

                 body{
                     background-color: <?php echo get_theme_mod('1902_backgroundColour','#ef826d'); ?>
                 }

                 .barColour{
                     background-color: <?php echo get_theme_mod('1902_barColour','#ef826d'); ?>!important;
                 }


             </style>
        <?php
    }
    add_action( 'wp_head', 'mytheme_customize_css');
