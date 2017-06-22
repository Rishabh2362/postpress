<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage PostPress 1.0.7
 * @since PostPress 1.0.0.0
 */
?>
<?php
// don't load it if you can't comment
if ( post_password_required() ) {
	return;
} ?>

<?php if ( have_comments() ) : ?>

	<?php
		wp_list_comments( array(
			'style'             => 'article',
			'short_ping'        => true,
			'avatar_size'       => 50,
			'type'              => 'all',
			'reply_text'        => __( 'Reply','postpress' ),
			'page'              => '',
			'per_page'          => '',
			'reverse_top_level' => null,
			'reverse_children'  => '',
			'format'            => 'html5',
		) );
	?>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<article class="">
		<nav class="row" role="navigation" aria-label="<?php esc_attr_e( 'Comments Navigation', 'postpress' ); ?>">
			<small class="nav-previous col-xs-6"><?php previous_comments_link( __( '&larr; Previous Comments' , 'postpress' ) ) ?></small>
			<small class="nav-previous col-xs-6 text-right"><?php next_comments_link( __( 'Next Comments &rarr;' , 'postpress' ) ) ?></small>
		</nav>
	</article>
<?php endif; ?>

<?php endif; // have_comments() ?>

<?php if ( comments_open() ) { comment_form(); } ?>
