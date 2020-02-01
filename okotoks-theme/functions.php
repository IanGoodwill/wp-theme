<?php

/*
* Register navigation menu.
*/

function register_my_menus() {
    register_nav_menus(
      array(
        'sidebar-menu' => __( 'Sidebar Menu' )
   

) ); }

add_action('init','register_my_menus');

/*
*   Include style sheets
*/

add_action( 'wp_head','wptheme_stylesheets');
function wptheme_stylesheets() {
    wp_enqueue_style( 
        'wptheme-styles',
        get_theme_file_uri( '/assets/css/main.css' )

    
     );
}

/*
*  include sidebar
*/

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short list of google searches.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}