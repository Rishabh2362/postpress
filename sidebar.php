<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * @package WordPress
 * @subpackage IAMSocial 2.0
 * @since IAMSocial 1.0.0
 */
?>
<aside>
	<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	<small id="credits">
		<?php
		$url1 = 'http://www.isabellegarcia.me';
		$url2 = 'http://www.aicragellebasi.social';
		$link = sprintf( wp_kses( __( '<a href="%1$s" target="_blank">PostPress</a>, a WordPress Theme by <a href="%2$s" target="_blank">@aicragellebasi</a>', 'iamsocial' ), array(  'a' => array( 'href' => array() ) ) ), esc_url( $url1 ), esc_url( $url2 ) );
		echo $link;
		?>
		</em>
	</small>
</aside>
