<?php
/**
* Include the top widgets
*
* @package WordPress
* @subpackage PostPress 1.0.7
* @since PostPress 1.0.0
*/
?>
<?php if ( get_header_image() ) : ?>
	<?php if ( ! ( is_single() || is_page() ) ) { ?>
		<div class="card card-inverse">
		  <img src="<?php header_image(); ?>" height="<?php esc_attr_e( get_custom_header()->height, 'postpress' ) ?>" width="<?php esc_attr_e( get_custom_header()->width, 'postpress' ) ?>" alt="" class="img-responsive" />
		  <div class="card-img-overlay">
		    <p class="card-title display-4"><?php bloginfo( 'name' ); ?></p>
		    <p class="card-text lead"><?php bloginfo( 'description' ); ?></p>
		  </div>
		</div>
	<?php } ?>
<?php endif; ?>