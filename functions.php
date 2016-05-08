<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );

    wp_enqueue_style('sonikat-sounds', get_stylesheet_directory_uri() . '/stylesheets/soundcloud.css');
    wp_enqueue_style('sonikat-header', get_stylesheet_directory_uri() . '/css/sonikat-header.css');
    wp_enqueue_style('sonikat-welcome', get_stylesheet_directory_uri() . '/css/page-welcome.css');
    wp_enqueue_style('sonikat-posts', get_stylesheet_directory_uri() . '/css/sonikat-posts.css');
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

?>
