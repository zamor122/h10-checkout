<?php get_header(); ?>


  <!-- Body Content here -->
  <?
  $image_attributes = wp_get_attachment_image_src( $attachment->ID );
    if ( $image_attributes ) : ?>
    <img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
<?php endif; ?>


<?php get_footer(); ?>