<?php
// Creating the widget 
class checkout_form_heading extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'checkout_form_heading', 
 
// Widget name will appear in UI
__('Edit the Form Header', 'checkout-form'), 
 
// Widget description
array( 'description' => __( 'Edit the form heading text.', 'checkout-form' ), ) 
);
}


// Creating widget front-end
public function widget( $args, $instance ) {
    $title = apply_filters( 'checkout_form_heading', $instance['title'] );
     
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
    $title = __( 'Select an option', 'checkout-form' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Main Heading:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }
         
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }

}