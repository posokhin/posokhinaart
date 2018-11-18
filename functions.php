<?php 

add_action( 'wp_enqueue_scripts', 'my_scripts' );
add_theme_support( 'menus' );


function my_scripts(){
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

add_action('after_setup_theme', 'top_menu');
    
function top_menu(){
    register_nav_menu( 'top', 'Верхнее меню' );
}

   


