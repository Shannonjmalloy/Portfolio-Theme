<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dme3115
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dme3115' ); ?></a>

	<!--<header id="masthead" class="site-header" role="banner">-->
		<div id="container">
		  <div id="nav">
		    <div class="small-12 large-2">
		      <header class="nav_list">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="http://shannonmalloy.com/wp-content/uploads/New_Logo-03.png" alt="Shannon Malloy Graphic &ap; Web Designer Logo" height="100px"/></a>
		        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		      </header> <!-- close nav list -->
		    </div><!-- close class=nav -->
		  </div><!-- close id=nav -->

		</div><!-- close id=container -->
	<!--</header> #masthead -->
