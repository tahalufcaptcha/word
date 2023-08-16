<?php
/*
 * This is the child theme for xatb Website theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 *//*
add_action( 'wp_enqueue_scripts', 'xatb_website_child_enqueue_styles' );
function xatb_website_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}*/
/*
 * Your code goes below
 */

function wpb_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Header Widget Area 1', 'project-website' ),
        'id'            => 'header-widget-area-1',
        'description'   => esc_html__( 'Add widgets here.', 'project-website' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    // register_sidebar( array(
    //     'name'          => esc_html__( 'Footer Widget Area 2', 'learning-hub-website' ),
    //     'id'            => 'footer-widget-area-2',
    //     'description'   => esc_html__( 'Add widgets here.', 'learning-hub-website' ),
    //     'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //     'after_widget'  => '</div>',
    //     'before_title'  => '<h3 class="widget-title">',
    //     'after_title'   => '</h3>',
    // ) );
    // register_sidebar( array(
    //     'name'          => esc_html__( 'Footer Widget Area 3', 'learning-hub-website' ),
    //     'id'            => 'footer-widget-area-3',
    //     'description'   => esc_html__( 'Add widgets here.', 'learning-hub-website' ),
    //     'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //     'after_widget'  => '</div>',
    //     'before_title'  => '<h3 class="widget-title">',
    //     'after_title'   => '</h3>',
    // ) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );
require get_stylesheet_directory(). '/inc/custom-post-types.php';
require get_stylesheet_directory(). '/inc/custom-tax-types.php';