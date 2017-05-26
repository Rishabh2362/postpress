<?php
/**
* Include the top widgets
*
* @package WordPress
* @subpackage PostPress 1.0.5
* @since PostPress 1.0.0
*/
?>
<?php if ( get_header_image() ) : ?>
	<?php if ( ! ( is_single() || is_page() ) ) { ?>
		<div class="card card-inverse">
		  <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="img-responsive" />
		  <div class="card-img-overlay">
		    <p class="card-title display-4"><?php bloginfo( 'name' ); ?></p>
		    <p class="card-text lead"><?php bloginfo( 'description' ); ?></p>
		  </div>
		</div>
	<?php } ?>
<?php endif; ?>