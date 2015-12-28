<?php
/**
 * Full Template for PostPress
 *
 * Displays all of the <head> section and everything up till <section>
 *
 * @package WordPress
 * @subpackage PostPress 1.0
 * @since PostPress 1.0
 */
?>
<?php get_header(); ?>

      <!--main content-->
      <div class="col-lg-9" id="main">
        <div class="row">
          <!--loop area-->
          <div class="col-md-9" id="content">

          <?php if ( is_active_sidebar( 'top-widgets' )  ) : ?>
            <div id="top-widgets"><?php get_sidebar('top'); ?></div>
          <?php endif; ?> 

            <section id="list-posts">
              <div class="card card-block card-inverse card-primary">
                <h4 class="card-title">Featured Post / Sticky Post</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Read More</a>
                  <a href="#" class="card-link"><i class="fa fa-facebook fa-lg"></i></a>
                  <a href="#" class="card-link"><i class="fa fa-twitter fa-lg"></i></a>
                  <a href="#" class="card-link"><i class="fa fa-google-plus fa-lg"></i></a>
                  <a href="#" class="card-link"><i class="fa fa-pinterest fa-lg"></i></a>
              </div>

              <!-- WP Loop -->
              <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>

              <div class="card" id="post-<?php the_ID(); ?>">
                <?php if (has_post_thumbnail()) { ?>
                  <div class="card-img-overlay">
                    <h4 class="card-title">
                      <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                      </a>
                    </h4>
                    <h6 class="card-subtitle text-muted"><i class="fa fa-calendar-o"></i> <?php the_time('F jS, Y') ?> </small></h6>
                  </div>
                  <!--img src="http://placehold.it/700x150?text=featuredImg" class="img-responsive"-->
                  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <?php echo the_post_thumbnail();  ?>
                  </a>
                <?php } else { ?>
                  <div class="card-block">
                    <h4 class="card-title">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h4>
                    <h6 class="card-subtitle text-muted"><i class="fa fa-calendar-o"></i> <?php the_time('F jS, Y') ?> </small></h6>
                  </div>  
                <?php } ?>
                <div class="card-block">
                  <p class="card-text"><?php the_excerpt(); ?></p>
                  <!--a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="card-link">Read More</a>
                  <br-->
                  <small class="postmetadata"><i class="fa fa-folder-open-o"></i> <?php _e( 'Posted in', 'postpress' ); ?> <?php the_category( ', ' ); ?></small><br>
                    <?php if (has_tag()) { ?>
                        <small><i class="fa fa-tags"></i> <?php the_tags(); ?></small><br>
                    <?php } ?>
                </div>
                <div class="card-footer">
                  <a href="#" class="card-link"><i class="fa fa-facebook fa-lg"></i></a>
                  <a href="#" class="card-link"><i class="fa fa-twitter fa-lg"></i></a>
                  <a href="#" class="card-link"><i class="fa fa-google-plus fa-lg"></i></a>
                  <a href="#" class="card-link"><i class="fa fa-pinterest fa-lg"></i></a>
                  
                  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="card-link">
                    <?php comments_number( '', '<i class="fa fa-comment-o"></i> <small>One Comment</small>', '<i class="fa fa-comment-o"></i> <small>% Comments</small>' );?>
                  </a>
                </div>
              </div>
              <?php comments_template(); ?>
            <?php endwhile; ?>
            <?php else : ?>
                    <h2 class="center"><?php _e('Not Found','postpress'); ?></h2>
                    <p class="center"><?php _e("Sorry, but you are looking for something that isn't here.", "postpress"); ?></p>
            <?php endif; ?>
            </section>
          </div> <!-- / loop area-->

          <!--begin secondary sidebar loading social icon-->
          <div class="col-md-3" id="extras">
            <?php get_template_part( 'part' , 'main-aside' ); ?>
          </div><!-- / secondary sidebar-->
        </div>
      </div><!-- / main content-->

<?php get_footer(); ?>
