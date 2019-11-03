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

    $wp_customize->add_setting( '1902_buttonColour' , array(
        'default'   => '#587a8e',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_buttonColourControl', array(
    	'label'      => __( 'Button Colour', '1902Custom' ),
        'description' => 'Change the button colour',
    	'section'    => 'colors',
    	'settings'   => '1902_buttonColour',
    ) ) );
    $wp_customize->add_setting( '1902_cardColour' , array(
        'default'   => '#ffe6c0',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '1902_cardColourControl', array(
    	'label'      => __( 'Card Colour', '1902Custom' ),
        'description' => 'Change the card colour',
    	'section'    => 'colors',
    	'settings'   => '1902_cardColour',
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
    $wp_customize->add_section('1902_content', array(
       'title'           => __('Front Content', '1902Custom'),
       'priority'        => 70
   ));
    $wp_customize->add_setting('1902Custom_contentImg', array(
        'transport'         => 'refresh',
        'height'            => 325,
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '1902Custom_contentImg_control', array(
        'label'             => __('Content Image', '1902Custom'),
        'section'           => '1902_content',
        'settings'          => '1902Custom_contentImg',
    )));
    $wp_customize->add_setting('1902Custom_contentText', array(
        'default'        => '1902Custom_theme',
        'transport'      => 'refresh',
    ) );

    $wp_customize->add_control('1902Custom_contentText_control', array(
       'label'      => __('contentText', '1902Custom'),
       'section'    => '1902_content',
       'settings'   => '1902Custom_contentText'
    ));

    $wp_customize->add_section( '1902_layout', array(
        'title'     => __( 'Layout', '1902Custom' ),
        'priority' => 110,
    ) );
    $wp_customize->add_setting( '1902Custom_layout_Sidebar', array(
        'default'        => 'right',
        'transport'      => 'refresh'
    ) );
    $wp_customize->add_control( '1902Custom_layout_control', array(
        'label'    => __( 'Layout', '1902Custom' ),
        'section'  => '1902_layout',
        'settings' => '1902Custom_layout_Sidebar',
        'type'     => 'select',
		'priority' => 1,
		'choices'  => array(
			'left'   => __( 'Left Sidebar', '1902Custom' ),
			'right'  => __( 'Right Sidebar', '1902Custom' ),
		),
    ));
    $wp_customize->add_setting( '1902Custom_layout_Card', array(
        'default'        => 'Grid',
        'transport'      => 'refresh'
    ) );
    $wp_customize->add_control( '1902Custom_layout_Card_control', array(
        'label'    => __( 'Layout', '1902Custom' ),
        'section'  => '1902_layout',
        'settings' => '1902Custom_layout_Card',
        'type'     => 'select',
		'priority' => 1,
		'choices'  => array(
			'Grid' => __( 'Grid', '1902Custom' ),
			'Row'  => __( 'Row', '1902Custom' ),
		),
    ));
    $wp_customize->add_section('1902Custom_carousel', array(
           'title'            => __('Slider Images', '1902Custom'),
           'priority'         => 70,
    ));
        for ($i=1; $i <=3 ; $i++) {
            $wp_customize->add_setting('1902Custom_carousel_img_' .$i, array(
                   'transport'        => 'refresh',
                   'height'           => 325,
            ));
            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '1902Custom_carousel_img_'.$i, array(
                   'label'            => __('Slider Image #'.$i, '1902Custom'),
                   'section'          => '1902Custom_carousel',
                   'settings'         => '1902Custom_carousel_img_'.$i,
            )));
        }
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
                 .buttonColour{
                     background-color: <?php echo get_theme_mod('1902_buttonColour','#587a8e'); ?>!important;
                 }
                 .cardColour{
                     background-color: <?php echo get_theme_mod('1902_cardColour', '#ffe6c0'); ?>!important;
                 }

             </style>
        <?php
    }
    add_action( 'wp_head', 'mytheme_customize_css');
