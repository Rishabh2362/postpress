<?php
/**
* Include PostPress Slider 
*
* @package PostPress
* @subpackage PostPress 1.0.3
* @since PostPress 1.0.0
*/
?>
<?php

$socialicons = array(
	'icon1_link' => 'fa-facebook-square',
	'icon2_link' => 'fa-twitter-square',
	'icon3_link' => 'fa-google-plus-square',
	'icon4_link' => 'fa-instagram',
	'icon5_link' => 'fa-linkedin-square',
	'icon6_link' => 'fa-youtube-square',
	'icon7_link' => 'fa-pinterest-square',
	'icon8_link' => 'fa-tumblr-square',
);
for ( $i = 1; $i <= 8; $i++ ){
	if ( get_theme_mod( 'icon'.$i.'_link') ) { ?>
		<a href="<?php echo esc_url( get_theme_mod( 'icon'.$i.'_link' ) ); ?>" target="_blank"><i class="fa <?php echo $socialicons[ 'icon'.$i.'_link' ]; ?> fa-lg"></i></a>
	<?php }
}
?>

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