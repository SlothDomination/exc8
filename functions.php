<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyninteen-style' for the Twenty Ninteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',//recupere le style de l'enfant
        get_stylesheet_directory_uri() . '/style.css',//recupere le style de l'enfant
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
?>
