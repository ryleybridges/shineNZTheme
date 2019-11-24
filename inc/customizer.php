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
        //SECTIONS

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
    }

    add_action( 'customize_register', 'mytheme_customize_register' );

    function mytheme_customize_css(){
        ?>
            <style type="text/css">
                .navTopColour { background-color: <?php echo get_theme_mod('shine_headerNavColour', '#4d4d4d'); ?>; }
                .navBottomColour { background-color: <?php echo get_theme_mod('shine_footerNavColour', '#4d4d4d'); ?>; }
                #mainBodyColour { background-color: <?php echo get_theme_mod('shine_mainBodyColour', '#FFFFFF'); ?>; }
            </style>
        <?php
    }

    add_action('wp_head', 'mytheme_customize_css');