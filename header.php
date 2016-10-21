<?php
/**
 * The Header template for PostPress
 *
 * Displays all of the <head> section and everything up till #main
 *
 * @package WordPress
 * @subpackage PostPress 1.0
 * @since PostPress 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="description" content="PostPress - Your WordPress Made Social">
    <meta name="author" content="Isabelle Garcia">
    <link rel="icon" href="../../favicon.ico">

    <?php wp_head(); ?> 

    <!-- TODO: add to functions.php and load from theme css folder 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
 
  </head>

  <body <?php body_class('antialiased'); ?>>

  <div class="container-fluid">

    <div class="row">

      <!--header / main sidebar-->
      <header class="col-lg-3" id="intro">
        <div class="brand" class="text-center">
          <?php if ( get_header_image() ) { ?>
            <a href="<?php echo esc_url(home_url()); ?>">
              <img src="<?php header_image(); ?>" alt="<?php esc_attr_e( 'Logo', 'postpress' ); ?>" id='logo' />
            </a>
          <?php } else { ?>
            <h1><a href="<?php echo esc_url(home_url()); ?>">PostPress</a></h1>
            <p class="lead">Your WordPress Made Social</p>
          <?php } ?>
        </div>
        <hr>
        <!-- navbar for iPad hor and desktops  -->
        <?php
        $defaults = array(
          'theme_location'  => 'primary',
          'container'       => 'nav',
          'container_class' => 'hidden-md-down',
          'container_id'    => 'main-nav-pills',
          'menu_class'      => 'nav nav-pills nav-stacked',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '<i></i>',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => ''
        );
        wp_nav_menu( $defaults );
        ?>
        <!-- open collapsed navbar for small device and iPad vert  -->
        <div class="hidden-lg-up btn-toggle-menu">
          <div data-toggle="collapse" data-target="#responsive-nav" id="">
            <a href="#" class="navbar-brand">menu</a>
          </div>
        </div>
        <!--/collapsed content: navbar for mobiles and iPad vert.-->
        <!--nav class="navbar-collapse collapse inverse hidden-lg-up" id="responsive-nav">
          <ul class="nav nav-pills nav-stacked">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Another link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </nav-->
        <?php
        $defaults = array(
          'theme_location'  => 'primary',
          'container'       => 'nav',
          'container_class' => 'navbar-collapse collapse inverse hidden-lg-up',
          'container_id'    => 'responsive-nav',
          'menu_class'      => 'nav nav-pills nav-stacked',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => ''
        );
        wp_nav_menu( $defaults );
        ?>
        <div class="hidden-md-down">
          <?php get_sidebar(); ?>
        </div>
      </header><!-- / header-->