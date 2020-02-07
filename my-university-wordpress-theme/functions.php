<?php 
    add_action('wp_enqueue_scripts', 'solmaz_files');
    function solmaz_files()
    {
        wp_enqueue_script( 'solmaz_javascript', get_theme_file_uri('/js/scripts-bundled.js'), null, '1.0', true);
        wp_enqueue_style( 'font_awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style( 'custom_google_fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
        wp_enqueue_style( 'solmaz_maain_styles', get_stylesheet_uri() );

    }

    add_action('after_setup_theme', 'solmaz_features');
    function solmaz_features()
    {
        add_theme_support( 'title-tag' );
    }
?>