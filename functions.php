<?php

    //STYLE & SCRIPT
    function addCustomThemeFiles_Shine(){
        wp_enqueue_style('bootstrapCSSShine', get_template_directory_uri() . '/assests/css/bootstrap.min.css', array(), '4.3.1', 'all');
        wp_enqueue_style('customCSSShine', get_template_directory_uri() . '/assests/css/style.min.css', array(), '0.0.1', 'all');

        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrapJSShine', get_template_directory_uri() . '/assests/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
        wp_enqueue_script('customJSShine', get_template_directory_uri() . '/assests/js/script.min.js', array('jquery'), '0.0.1', true);
    }

    add_action('wp_enqueue_scripts', 'addCustomThemeFiles_Shine');

    // MENU
    function addCustomMenus_Shine(){
        add_theme_support('menus');
        register_nav_menu('top_navigation', __('The top navigation is located at the top of each page.', 'ShineCustom'));
        register_nav_menu('side_navigation', __('The side navigation is located at the side of each page', 'ShineCustom'));
        register_nav_menu('bottom_navigation', __('The bottom navigation is located at the bottom of each page', 'ShineCustom'));
    }

    add_action('after_setup_theme', 'addCustomMenus_Shine');

    // IMAGES

    $customHeaderDefaults = array(
        'width' => 1280,
        'height' => 720,
        'default-image' => get_template_directory_uri() . '/assests/images/man-alone.jpg'
    );
    add_theme_support('custom-header', $customHeaderDefaults);

    register_default_headers(array (
        'defaultImage' => array(
            'url' => get_template_directory_uri() . '/assests/images/man-alone.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/assests/images/man-alone.jpg',
            'description' => __('The default image for the custom header.', 'ShineCustom')
        )
    ));

    add_theme_support('post-thumbnails', array('post', 'product'));

    // NAVWALKER
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

    require get_parent_theme_file_path('./addons/educational_alert.php');
