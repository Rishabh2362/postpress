<?php
/**
* Include the top widgets
*
* @package WordPress
* @subpackage PostPress 1.0
* @since PostPress 1.0
*/
?>
<?php if ( is_active_sidebar( 'top-widgets' )  ) : ?>
<div id="top-widgets"><?php get_sidebar( 'top' ); ?></div>
<?php endif; ?>
