<?php
$path = realpath(dirname(__FILE__));
require_once($path . '/inc/checkout_main_heading.php');
require_once($path . '/inc/checkout_form_heading.php');
require_once($path . '/inc/checkout_textblock_wording.php');

/* 
    Add custom Logo to header of checkout page
*/
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




/* 
    Begin Widgets
*/
add_action( 'widgets_init', 'checkout_sidebars' );
function checkout_sidebars() {
    /* Register the sidebar for the Main Header Editor */
    register_sidebar(
        array(
            'id'            => 'heading',
            'name'          => __( 'Edit Main Header' ),
            'description'   => __( 'This sidebar allows you to edit the main header.' ), 
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="py-3 title-join">',
            'after_title'   => '</h2>',
        )
    );

    /* Register the sidebar for the Form Header Editor */
    register_sidebar(
        array(
            'id'            => 'form',
            'name'          => __( 'Edit Form Header' ),
            'description'   => __( 'This sidebar allows you to edit the main header.' ), 
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );

    /* Register the sidebar for the Text Block */
    register_sidebar(
        array(
            'id'            => 'textblock',
            'name'          => __( 'Edit Info Textblock' ),
            'description'   => __( 'This sidebar allows you to edit the block of text to the right oof the sign up form.' ), 
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );
}

add_action('widgets_init', 'register_all_widgets');
function register_all_widgets(){
    register_widget('checkout_main_heading');
    register_widget('checkout_form_heading');
    register_widget('checkout_textblock_wording');
}

$defaults = array(
    'default-color'          => 'transparent',
    'default-image'          => '',
    'default-repeat'         => 'no-repeat',
    'default-position-x'     => 'left',
    'default-position-y'     => 'top',
    'default-size'           => 'auto',
    'default-attachment'     => 'scroll',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );