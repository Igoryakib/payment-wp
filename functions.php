<?php
    add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );
    add_theme_support( 'custom-logo' );

    function add_scripts_and_styles() {
        wp_enqueue_style( 'payment', get_template_directory_uri() . '/assets/css/payment.css');
        wp_enqueue_script( 'payment', get_template_directory_uri() . '/assets/js/payment.js', false, null, true);
    }
?>