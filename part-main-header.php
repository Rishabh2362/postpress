<?php
/**
* Include the top widgets
*
* @package WordPress
* @subpackage PostPress 1.0.1
* @since PostPress 1.0.0
*/
?>
<?php if ( get_header_image() ) : ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="img-responsive" />
<?php endif; ?>

