<?php
function mi_tema_fse_enqueue_styles() {
    wp_enqueue_style('mi-tema-fse-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_fse_enqueue_styles');

// Soporte para características básicas
add_theme_support('post-thumbnails');
add_theme_support('responsive-embeds');
add_theme_support('editor-styles');
add_theme_support( 'appearance-tools' );
add_theme_support( 'border' );


