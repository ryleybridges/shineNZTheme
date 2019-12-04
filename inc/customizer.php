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

        $wp_customize->add_setting('shine_sidebarSwitch', array(
            'default' => 'left',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_textBlurb', array(
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_buttonSwitchEnds', array(
            'default' => 'top',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_buttonNavColour', array(
            'default' => '#FFFFFF',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_footerTextInfo', array(
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_navTopButton1', array(
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_navTopButton2', array(
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_navTopButtonLink1', array(
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('shine_navTopButtonLink2', array(
            'transport' => 'refresh'
        ));

        //SECTIONS
        $wp_customize->add_section('layout', array(
            'title' => __('Layout', 'ShineCustom'),
            'priority' => 50
        ));

        $wp_customize->add_section('text insert', array(
            'title' => __('Text Insert', 'ShineCustom'),
            'priority' => 60
        ));

        $wp_customize->add_section('nav buttons', array(
            'title' => __('Navbar Buttons', 'ShineCustom'),
            'priority' => 70
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

        $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shine_buttonNavColour', array(
            'label' => __('Button Navigation Bar Colour', 'ShineCustom'),
            'description' => 'Change the colour for the button navigation bar',
            'section' => 'colors',
            'settings' => 'shine_buttonNavColour'
        )));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'shine_sidebarSwitch', array(
            'label' => __('Switch sidebar from left to right', 'ShineCustom'),
            'section' => 'layout',
            'settings' => 'shine_sidebarSwitch',
            'type' => 'radio',
            'choices' => array(
                'left' => 'Left',
                'right' => 'Right'
            )
        )));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'shine_textBlurb', array(
            'label' => __('Text blurb content', 'ShineCustom'),
            'description' => 'Insert front page blurb text for below the subtitle',
            'section' => 'text insert',
            'settings' => 'shine_textBlurb',
            'type' => 'textarea'
        )));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'shine_buttonSwitchEnds', array(
            'label' => __('Switch button locations', 'ShineCustom'),
            'description' => 'Switch donate and quick exit button locations',
            'section' => 'layout',
            'settings' => 'shine_buttonSwitchEnds',
            'type' => 'radio',
            'choices' => array(
                'top' => 'Top',
                'bottom' => 'Bottom',
                'both' => 'Both'
            )
        )));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'shine_footerTextInfoControl', array(
            'label' => __('Footer Text', 'ShineCustom'),
            'description' => 'Insert text into the footer',
            'section' => 'text insert',
            'settings' => 'shine_footerTextInfo',
            'type' => 'textarea'
        )));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'shine_navTopButton1', array(
            'label' => __('Navbar Button One', 'ShineCustom'),
            'description' => 'Create first navbar button',
            'section' => 'nav buttons',
            'settings' => 'shine_navTopButton1',
            'type' => 'input'
        )));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'shine_navTopButtonLink1', array(
            'label' => __('Navbar Link One', 'ShineCustom'),
            'description' => 'Link for first navbar button',
            'section' => 'nav buttons',
            'settings' => 'shine_navTopButtonLink1',
            'type' => 'input'
        )));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'shine_navTopButton2', array(
            'label' => __('Navbar Button Two', 'ShineCustom'),
            'description' => 'Create second navbar button',
            'section' => 'nav buttons',
            'settings' => 'shine_navTopButton2',
            'type' => 'input'
        )));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'shine_navTopButtonLink2', array(
            'label' => __('Navbar Link Two', 'ShineCustom'),
            'description' => 'Link for second navbar button',
            'section' => 'nav buttons',
            'settings' => 'shine_navTopButtonLink2',
            'type' => 'input'
        )));

    }

    add_action( 'customize_register', 'mytheme_customize_register');

    function mytheme_customize_css(){
        ?>
            <style type="text/css">
                .navTopColour { background-color: <?php echo get_theme_mod('shine_headerNavColour', '#4d4d4d'); ?>; }
                .navBottomColour { background-color: <?php echo get_theme_mod('shine_footerNavColour', '#4d4d4d'); ?>; }
                #homeBody { background-color: <?php echo get_theme_mod('shine_mainBodyColour', '#FFFFFF'); ?>; }
                #indexBody { background-color: <?php echo get_theme_mod('shine_mainBodyColour', '#FFFFFF'); ?>; }
                #pagesPostsBody { background-color: <?php echo get_theme_mod('shine_mainBodyColour', '#FFFFFF'); ?>; }
                body { background-color: <?php echo get_theme_mod('shine_backgroundColour', '#FFFFFF'); ?>; }
                .buttonNavColour { background-color: <?php echo get_theme_mod('shine_buttonNavColour', '#FFFFFF'); ?>; }
            </style>
        <?php
    }

    add_action('wp_head', 'mytheme_customize_css');
