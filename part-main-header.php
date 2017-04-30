<?php
/**
* Include the top widgets
*
* @package WordPress
* @subpackage PostPress 1.0.3
* @since PostPress 1.0.0
*/
?>
<?php if ( get_header_image() ) : ?>
<div class="card card-inverse">
  <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="img-responsive" />
  <div class="card-img-overlay">
    <h4 class="card-title"><?php bloginfo( 'name' ); ?></h4>
    <p class="card-text"><?php bloginfo( 'description' ); ?></p>
  </div>
</div>
<?php endif; ?>