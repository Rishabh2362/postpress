<?php
/**
 * Include the search form in the top nav bar, formatted with Bootstrap styles
 *
 * @package PostPress
 * @subpackage PostPress 1.0.0
 * @since PostPress 1.0.0
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
	  <input type="text" class="form-control" placeholder="<?php esc_attr_e( 'Search for...', 'postpress' ) ?>" name="s" id="s" >
	  <span class="input-group-btn">
		<button class="btn btn-secondary" type="button"><?php esc_html_e( 'Go!', 'postpress' ) ?></button>
	  </span>
	</div>
</form>