<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dme3115
 */

get_header(); ?>

		<?php
		if ( have_posts() ) : ?>

	<div class="hero">
	<h1>Web Design</h1>
	</div>
	<div class="content">
	<div class="grid projpicrow">
	  <div class="small-12">
	      <ul class="gridcontainer small-block-grid-1 medium-block-grid-3 large-block-grid-4">	
	<?php
	/* Start the Loop */
	while ( have_posts() ) : the_post(); ?>

	  <li>
	  	<a href="<?php the_permalink(); ?>">
	  		<?php the_post_thumbnail(); ?>
		  <!--	<span class="hovertext">
		  	    <span><?php the_title(); ?></span>
		  	</span> -->
	  	</a>
	  </li>

	<?php
	endwhile;
		the_posts_navigation();
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif; ?>
	
	    </ul>
	</div><!--close column -->
	</div><!--close grid project row -->
	</div><!-- closer id=content -->
	<div class="clearfix"></div>

<?php
get_sidebar();
get_footer();
