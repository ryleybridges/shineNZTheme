<?php

    function addCustomThemeFiles_Shine(){
        wp_enqueue_style('bootstrapCSSShine', get_template_directory_uri() . '/assests/css/bootstrap.min.css', array(), '4.3.1', 'all');
        wp_enqueue_style('customCSSShine', get_template_directory_uri() . '/assests/css/style.css', array(), '0.0.1', 'all');

        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrapJSShine', get_template_directory_uri() . '/assests/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
        wp_enqueue_script('customJSShine', get_template_directory_uri() . '/assests/js/script.js', array('jquery'), '0.0.1', true);
    }

    add_action('wp_enqueue_scripts', 'addCustomThemeFiles_Shine');

    function addCustomMenus_Shine(){
        add_theme_support('menus');
    }

    add_action('after_setup_theme', 'addCustomMenus_Shine');

    function register_navwalker(){
    	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );

    if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }

    remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

    require_once get_template_directory() . '/inc/customizer.php';
