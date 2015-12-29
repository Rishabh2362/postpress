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

            <?php get_template_part( 'part' , 'main-top' ); ?>

            <section id="list-posts">
              <?php get_template_part( 'part' , 'main-content' ); ?>
            </section>
          </div> <!-- / loop area-->

          <!--begin secondary sidebar loading social icon-->
          <div class="col-md-3" id="extras">
            <?php get_template_part( 'part' , 'main-aside' ); ?>
          </div><!-- / secondary sidebar-->
        </div>
      </div><!-- / main content-->

<?php get_footer(); ?>
