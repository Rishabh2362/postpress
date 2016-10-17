<?php
/**
 * Include WordPress Loop 
 *
 * @package WordPress
 * @subpackage PostPress 1.0
 * @since PostPress 1.0
 */
?>

<!-- WP Loop -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
	<div class="card-header">
		<h4 class="card-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<?php the_title(); ?>
				</a>
		</h4>
		<h6 class="card-subtitle text-muted"><i class="fa fa-calendar-o"></i> <?php the_time( 'F jS, Y' ) ?> </h6>
	</div>  

	<?php if ( is_single() || is_page() ) { ?>
		<?php if ( has_post_thumbnail() ) { ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php echo the_post_thumbnail();  ?>
			</a>
		<?php } ?>
		<div class="card-block">
			<?php the_content(); ?>
		</div>

	<?php } else { ?>
		<div class="card-block">
			<?php the_excerpt(); ?>
		</div>
		<?php if ( has_post_thumbnail() ) { ?>
		<!--img src="http://placehold.it/700x150?text=featuredImg" class="img-responsive"-->
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php echo the_post_thumbnail();  ?>
		</a>
		<?php }  ?>
	<?php	}

/* Check if the post is divided in several pages. If so, show the pagination */
global $numpages;
if ( $numpages > 1 ) {
	if ( is_single() || is_page() ) {
		$args = array(
			'before'           => '<nav><small>' . __( 'Pages:', 'iamsocial' ),
			'after'            => '</small></nav>',
			'link_before'      => '',
			'link_after'       => '',
			'next_or_number'   => 'number',
			'separator'        => ' ',
			'nextpagelink'     => __( 'Next page', 'iamsocial' ),
			'previouspagelink' => __( 'Previous page', 'iamsocial' ),
			'pagelink'         => '%',
			'echo'             => 1,
		);
		echo '<div id="navLinkPages">';
				wp_link_pages( $args );
		echo '</div>';
	}
} ?>
	<div class="card-footer">
		<small class="postmetadata"><i class="fa fa-folder-open-o"></i> <?php esc_html_e( 'Posted in', 'postpress' ); ?> <?php the_category( ', ' ); ?></small><br>
			<?php if ( has_tag() ) { ?>
					<small><i class="fa fa-tags"></i> <?php the_tags(); ?></small><br>
			<?php } ?>
	</div>
</article>
<?php
/* Check if the post is divided in several pages. If so, show the pagination */
global $numpages;
if ( $numpages > 1 ) {
	if ( is_single() || is_page() ) {
		$args = array(
			'before'           => '<nav><small>' . __( 'Pages:', 'iamsocial' ),
			'after'            => '</small></nav>',
			'link_before'      => '',
			'link_after'       => '',
			'next_or_number'   => 'number',
			'separator'        => ' ',
			'nextpagelink'     => __( 'Next page', 'iamsocial' ),
			'previouspagelink' => __( 'Previous page', 'iamsocial' ),
			'pagelink'         => '%',
			'echo'             => 1,
		);
		echo '<article>';
				wp_link_pages( $args );
		echo '</article>';
	}
}
comments_template();
endwhile; ?> 

<!-- Navigation within category/archive/blog -->
<?php
$prev_link = get_previous_posts_link();
$next_link = get_next_posts_link();
// checking if there is next or previous. If yes, show the nav.
if ( $prev_link || $next_link ) { ?>
	<nav class="nav nav-inline" id="prev-next">
		<?php next_posts_link( '<i class="fa fa-chevron-left"></i> '.__( 'Previous Posts', 'postpress' ) ); ?>
		<?php previous_posts_link( __( 'Next Posts', 'postpress' ).' <i class="fa fa-chevron-right"></i>' ); ?>
	</nav>
<?php } ?> 

<!-- Navigation within single -->
<?php  if ( is_single() ) {  ?>
	<nav class="nav nav-inline" id="prev-next">
		<?php next_post_link( '%link', '<i class="fa fa-chevron-left"></i> '.__( 'Prev', 'postpress' ), true ); ?>
		<?php previous_post_link( '%link', __( 'Next', 'postpress' ).' <i class="fa fa-chevron-right"></i>', true ); ?>
	</nav>
<?php } ?>  

<!-- No post found -->           
<?php else : ?>
	<h2 class="center"><?php esc_html_e( 'Not Found','postpress' ); ?></h2>
	<p class="center"><?php esc_html_e( "Sorry, but you are looking for something that isn't here.", 'postpress' ); ?></p>
<?php endif; ?>
