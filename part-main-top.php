<?php
/**
* Include the top widgets
*
* @package WordPress
* @subpackage PostPress 1.0.8
* @since PostPress 1.0.0
*/
?>
<?php if ( is_active_sidebar( 'top-widgets' )  ) : ?>
<div id="top-widgets" role="complementary" aria-label="<?php esc_attr_e( 'Top Widget', 'postpress' ); ?>"><?php get_sidebar( 'top' ); ?></div>
<?php endif; ?>
