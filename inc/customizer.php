<?php

    function mytheme_customize_register( $wp_customize ){
        // SETTINGS
        $wp_customize->add_setting('shine_headerNavColour', array(
            'default' => '#4d4d4d',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_mainBodyColour', array(
            'default' => '#FFFFFF',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_footerNavColour', array(
            'default' => '#4d4d4d',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_backgroundColour', array(
            'default' => '#FFFFFF',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_headerTextColour', array(
            'default' => '#000000',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_sidebarSwitch', array(
            'default' => 'left',
            'transport' => 'refresh'
        ));

        //SECTIONS
        $wp_customize->add_section('layout', array(
            'title' => __('Layout', 'ShineCustom'),
            'priority' => 50
        ));

        // CONTROLS
        $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shine_headerNavColour', array(
            'label' => __('Header Navigation Colour', 'ShineCustom'),
            'description' => 'Change the header navigation colour',
            'section' => 'colors',
            'settings' => 'shine_headerNavColour'
        )));

        $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shine_mainBodyColour', array(
            'label' => __('Main Body Colour', 'ShineCustom'),
            'description' => 'Change the main body colour',
            'section' => 'colors',
            'settings' => 'shine_mainBodyColour'
        )));

        $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shine_footerNavColour', array(
            'label' => __('Footer Navigation Colour', 'ShineCustom'),
            'description' => 'Change the footer navigation colour',
            'section' => 'colors',
            'settings' => 'shine_footerNavColour'
        )));

        $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shine_backgroundColour', array(
            'label' => __('Background Colour', 'ShineCustom'),
            'description' => 'Change the colour of the background',
            'section' => 'colors',
            'settings' => 'shine_backgroundColour'
        )));

        $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shine_headerTextColour', array(
            'label' => __('Header text colour', 'ShineCustom'),
            'description' => 'Change the colour of the header text',
            'section' => 'colors',
            'settings' => 'shine_headerTextColour'
        )));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'shine_sidebarSwitch', array(
            'label' => __('Switch sidebar from left to right', '1902Custom'),
            'section' => 'layout',
            'settings' => 'shine_sidebarSwitch',
            'type' => 'radio',
            'choices' => array(
                'left' => 'Left',
                'right' => 'Right'
            )
        )));

    }

    add_action( 'customize_register', 'mytheme_customize_register' );

    function mytheme_customize_css(){
        ?>
            <style type="text/css">
                .navTopColour { background-color: <?php echo get_theme_mod('shine_headerNavColour', '#4d4d4d'); ?>; }
                .navBottomColour { background-color: <?php echo get_theme_mod('shine_footerNavColour', '#4d4d4d'); ?>; }
                #mainBody { background-color: <?php echo get_theme_mod('shine_mainBodyColour', '#FFFFFF'); ?>; }
                #homeBody { background-color: <?php echo get_theme_mod('shine_mainBodyColour', '#FFFFFF'); ?>; }
                body { background-color: <?php echo get_theme_mod('shine_backgroundColour', '#FFFFFF'); ?>; }
                .mainHeaderText { background-color: <?php echo get_theme_mod('shine_headerTextColour', '#000000'); ?>; }
            </style>
        <?php
    }

    add_action('wp_head', 'mytheme_customize_css');
