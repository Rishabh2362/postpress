<?php
/**
 * Include WordPress Loop
 *
 * @package WordPress
 * @subpackage PostPress 1.0.4
 * @since PostPress 1.0.0
 */
?>

<!-- WP Loop -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card-header">
	<?php if ( is_single() || is_page() ) { ?>
		<h1 class="card-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
			</a>
		</h1>
	<?php } else if ( is_archive() ) { ?>
		<h1 class="card-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_archive_title(); ?>
			</a>
		</h1>
	<?php } else { ?>
		<h2 class="card-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
			</a>
		</h2>
	<?php } ?>
		<p class="card-subtitle text-muted"><i class="fa fa-calendar-o"></i> <?php the_time( __( 'F jS, Y', 'postpress' ) ) ?> </p>
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
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php echo the_post_thumbnail();  ?>
		</a>
		<?php }  ?>

	<?php	} ?>

		<ul class="list-group list-group-flush">
			<?php
			/* Check if the post is divided in several pages. If so, show the pagination */
			global $numpages;
			if ( $numpages > 1 ) {
				if ( is_single() || is_page() ) {
					$args = array(
						'before'           => '<li class="list-group-item bottom_numpage"><small>' . __( 'Pages:', 'postpress' ),
						'after'            => '</small></li>',
						'link_before'      => '',
						'link_after'       => '',
						'next_or_number'   => 'number',
						'separator'        => ' ',
						'nextpagelink'     => __( 'Next page', 'postpress' ),
						'previouspagelink' => __( 'Previous page', 'postpress' ),
						'pagelink'         => '%',
						'echo'             => 1,
					);
					wp_link_pages( $args );
				}
			} ?>
		</ul>

		<div class="card-footer">
			<small class="postmetadata text-muted"><i class="fa fa-folder-open-o"></i> <?php esc_html_e( 'Posted in', 'postpress' ); ?> <?php the_category( ', ' ); ?></small><br>
				<?php if ( has_tag() ) { ?>
						<small class="postmetadata text-muted"><i class="fa fa-tags"></i> <?php the_tags(); ?></small><br>
				<?php } ?>
		</div>

</article>
<?php
comments_template();
endwhile; ?>

<!-- Navigation within category/archive/blog -->
<?php
$prev_link = get_previous_posts_link();
$next_link = get_next_posts_link();
// checking if there is next or previous. If yes, show the nav.
if ( $prev_link || $next_link ) { ?>
	<nav class="nav nav-inline" id="prev-next" role="navigation" aria-label="<?php esc_attr_e( 'Blog Navigation', 'postpress' ); ?>">
		<?php next_posts_link( '<i class="fa fa-chevron-left"></i> '.__( 'Previous Posts', 'postpress' ) ); ?>
		<?php previous_posts_link( __( 'Next Posts', 'postpress' ).' <i class="fa fa-chevron-right"></i>' ); ?>
	</nav>
<?php } ?>

<!-- Navigation within single -->
<?php  if ( is_single() ) {  ?>
	<nav class="nav nav-inline" id="prev-next" role="navigation" aria-label="<?php esc_attr_e( 'Post Navigation', 'postpress' ); ?>">
		<?php next_post_link( '%link', '<i class="fa fa-chevron-left"></i> '.__( 'Prev', 'postpress' ), true ); ?>
		<?php previous_post_link( '%link', __( 'Next', 'postpress' ).' <i class="fa fa-chevron-right"></i>', true ); ?>
	</nav>
<?php } ?>

<!-- No post found -->
<?php else : ?>
	<article class="sticky">
		<div class="card-header">
			<h2 class="card-title"><?php esc_html_e( 'Sorry...','postpress' ); ?></h2>
			<p class="card-subtitle text-muted"><i class="fa fa-exclamation-circle"></i> <?php esc_html_e( 'Looks like something went wrong','postpress' ); ?> </p>
		</div>
		<div class="card-block">
			<p>
			<?php esc_html_e( "You can return to our homepage, use our main menu to perform a new search. If you problem is persists, contact with an administrator of the site.", 'postpress' ); ?>
			</p>
		</div>
		<div class="card-footer">
		    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="card-link"><?php esc_html_e( 'Back to Homepage','postpress' ); ?></a>
		</div>
	</article>


<?php endif; ?>
