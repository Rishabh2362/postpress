<?php
/**
* Include PostPress Slider 
*
* @package PostPress
* @subpackage PostPress 1.0
* @since PostPress 1.0
*/
?>
<?php
if ( get_theme_mod( 'icon1_link') ) { ?>
<a href="<?php echo esc_url(get_theme_mod('icon1_link')); ?>" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a>
<?php } 
if (get_theme_mod('icon2_link')) { ?>
<a href="<?php echo esc_url(get_theme_mod('icon2_link')); ?>" target="_blank"><i class="fa fa-twitter-square fa-lg"></i></a>
<?php } 
if (get_theme_mod('icon3_link')) { ?>
<a href="<?php echo esc_url(get_theme_mod('icon3_link')); ?>" target="_blank"><i class="fa fa-google-plus-square fa-lg"></i></a>
<?php } 
if (get_theme_mod('icon4_link')) { ?>
<a href="<?php echo esc_url(get_theme_mod('icon4_link')); ?>" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
<?php } 
if (get_theme_mod('icon5_link')) { ?>
<a href="<?php echo esc_url(get_theme_mod('icon5_link')); ?>" target="_blank"><i class="fa fa-linkedin-square fa-lg"></i></a>
<?php } 
if (get_theme_mod('icon6_link')) { ?>
<a href="<?php echo esc_url(get_theme_mod('icon6_link')); ?>" target="_blank"><i class="fa fa-youtube-square fa-lg"></i></a>
<?php } 
if (get_theme_mod('icon7_link')) { ?>
<a href="<?php echo esc_url(get_theme_mod('icon7_link')); ?>" target="_blank"><i class="fa fa-pinterest-square fa-lg"></i></a>
<?php } 
if (get_theme_mod('icon8_link')) { ?>
<a href="<?php echo esc_url(get_theme_mod('icon8_link')); ?>" target="_blank"><i class="fa fa-tumblr-square fa-lg"></i></a>
<?php } ?>

<?php if ( is_active_sidebar( 'primary-sidebar' )  ) : ?>
<div class="hidden-lg-up">
  <br>
  <?php get_sidebar('primary'); ?>
</div>
<?php endif; ?> 
<?php if ( is_active_sidebar( 'secondary-sidebar' )  ) : ?>
<div>
  <br>
  <?php get_sidebar('secondary'); ?>
</div>
<?php endif; ?> 