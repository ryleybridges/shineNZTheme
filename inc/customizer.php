<?php

    function mytheme_customize_register( $wp_customize ){
        // SETTINGS

        //SECTIONS

        // CONTROLS

    }

    add_action( 'customize_register', 'mytheme_customize_register' );

    function mytheme_customize_css(){

    }

    add_action('wp_head', 'mytheme_customize_css');
