<?php
/**
 * Full Template for PostPress
 *
 * Displays all of the <head> section and everything up till <section>
 *
 * @package WordPress
 * @subpackage PostPress 1.0.0
 * @since PostPress 1.0.0
 */
?>
<?php get_header(); ?>

<!--main content-->
<div class="col-lg-9" id="main">
	<div class="row">
		<!--loop area-->
		<div class="col-md-9" id="content">
			<?php get_template_part( 'part' , 'main-top' ); ?>

			<section id="list-posts" role="main">
				<?php get_template_part( 'part' , 'main-content' ); ?>
			</section>
			<section id="credits">
				<small>
					<?php
					$url1 = 'http://www.isabellegarcia.me';
					$url2 = 'http://www.aicragellebasi.social';
					$link = sprintf( wp_kses( __( '<a href="%1$s" target="_blank">PostPress</a>, a WordPress Theme by <a href="%2$s" target="_blank">@aicragellebasi</a>', 'postpress' ), array(  'a' => array( 'href' => array() ) ) ), esc_url( $url1 ), esc_url( $url2 ) );
					echo $link;
					?>
					</em>
				</small>
			</section>
		</div> <!-- / loop area-->

		<!--begin secondary sidebar loading social icon-->
		<div class="col-md-3" id="extras" role="complementary" aria-label="<?php _e( 'Secondary Sidebar', 'postpress' ); ?>">
			<?php get_template_part( 'part' , 'main-aside' ); ?>
		</div><!-- / secondary sidebar-->
	</div>
</div><!-- / main content-->

<?php get_footer(); ?>
