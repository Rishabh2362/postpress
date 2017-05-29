<?php
/**
 * Full Template for PostPress
 *
 * Displays all of the <head> section and everything up till <section>
 *
 * @package WordPress
 * @subpackage PostPress 1.0.6
 * @since PostPress 1.0.0
 */
?>
<?php get_header(); ?>

<!--main content-->
<div class="col-lg-9" id="main">
	<div class="row">
		<!--loop area-->
		<main class="col-md-9" id="content" role="main">
			<?php get_template_part( 'part' , 'main-top' ); ?>

			<section id="wp-header">
			<?php get_template_part( 'part' , 'main-header' ); ?>	
			</section>
			
			
			<section id="list-posts">
			<?php if ( is_category() || is_archive() || is_tag() || is_search() ) : ?>
				<h1 class="skip"><?php wp_title(); ?></h1>
			<?php endif; ?>
				<?php get_template_part( 'part' , 'main-content' ); ?>
			</section>
			<section id="credits" role="contentinfo">
				<small>
					<?php
					$url1 = 'http://www.isabellegarcia.me';
					$link = sprintf( wp_kses( __( 'PostPress, a WordPress Theme by <a href="%1$s" target="_blank">@aicragellebasi</a>', 'postpress' ), array(  'a' => array( 'href' => array() ) ) ), esc_url( $url1 ) );
					echo $link;
					?>
					</em>
				</small>
			</section>
		</main> <!-- / loop area-->

		<!--begin secondary sidebar loading social icon-->
		<div class="col-md-3" id="extras" role="complementary" aria-label="<?php _e( 'Secondary Sidebar', 'postpress' ); ?>">
			<?php get_template_part( 'part' , 'main-aside' ); ?>
		</div><!-- / secondary sidebar-->
	</div>
</div><!-- / main content-->

<?php get_footer(); ?>
