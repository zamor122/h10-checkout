<?php
$path = realpath(dirname(__FILE__));
require_once($path . '/inc/checkout_main_heading.php');


add_theme_support( 'custom-logo' );

function checkout_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'checkout_custom_logo_setup' );

add_action( 'widgets_init', 'checkout_sidebars' );
function checkout_sidebars() {
    /* Register the sidebar for the Main Header Editor */
    register_sidebar(
        array(
            'id'            => 'landing',
            'name'          => __( 'Landing Page' ),
            'description'   => __( 'This sidebar allows you to edit all text on the landing page (Step 1).' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="title-join">',
            'after_title'   => '</h2>',
        )
    );
    /* Register the Sidebar for the text above the sign up form */
    register_sidebar(
        array(
            'id'            => 'landing',
            'name'          => __( 'Landing Page' ),
            'description'   => __( 'This sidebar allows you to edit all text on the landing page (Step 1).' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="title-join">',
            'after_title'   => '</h2>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

// Register and load the widget
function checkout_load_widget() {
    register_widget( 'checkout_main_heading' );
}
add_action( 'widgets_init', 'checkout_load_widget' );