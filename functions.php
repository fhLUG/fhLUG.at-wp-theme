<?php

/**
 * Custom template tags for this theme.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';

if( ! function_exists( 'fhlug_color_schemes' ) ) :
/**
 * Applies fhLUG-specific filters to Twenty Sixteen color scheme.
 */
function fhlug_color_schemes( $schemes ) {
    $schemes['default']['colors'][2] = '#007ACC';
    return $schemes;
}
endif;
add_filter( 'twentysixteen_color_schemes', 'fhlug_color_schemes' );

if( ! function_exists( 'fhlug_theme_enqueue_styles' ) ) :
/**
 * Enqueues styles
 */
function fhlug_theme_enqueue_styles() {
    $parent_style =  'twentysixteen-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style(
        'twentysixteen-fhlug-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
endif;
add_action( 'wp_enqueue_scripts', 'fhlug_theme_enqueue_styles' );
