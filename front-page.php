<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dme3115
 */
?>

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
<div id="page" class="background site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dme3115' ); ?></a>

<div id="splash">
	<div class="splashcontain">
  	<h1><a href="/work"><img src="http://shannonmalloy.com/wp-content/uploads/New_Logo-02.png"></a> </h1>
  	<div class="enterButtons rows">
	  	<a class="small-6 small-centered" href="category/web-design"> Web<span class="nonmobile"> Design</span></a>
	  	<h1 class="inline"> &amp; </h1>
	  	<a class="small-6 small-centered" href="category/graphic-design">Print<span class="nonmobile"> Design</span></a>
  	</div><!--close enterButtons-->
  </div>
</div>
</div><!-- #content -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
