<?php
// Creating the widget 
class checkout_textblock_wording extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'checkout_textblock_wording', 
 
// Widget name will appear in UI
__('Edit the Form Header', 'textblock-wording'), 
 
// Widget description
array( 'description' => __( 'Edit the text block to the right of the sign up form.', 'textblock-wording' ), ) 
);
}


// Creating widget front-end
public function widget( $args, $instance ) {
    $title = apply_filters( 'checkout_textblock_wording', $instance['title'] );
     
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
     
    // This is where you run the code and display the output
    echo $args['after_widget'];
    }
             
    // Widget Backend 
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'Some wording', 'textblock-wording' );
    }
    }
         
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }

}