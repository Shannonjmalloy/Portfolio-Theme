<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dme3115
 */

get_header(); ?>

  <div class="hero">
  <h1><?php the_title(); ?></h1>
  </div>
	<div class="content">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-work', get_post_format() );

			?> 

			<div class="link next small-6 columns">
				<div class="show-for-medium-up"><?php next_post_link( '%link', '%title', TRUE ); ?></div>
			</div> 
			<div class="link previous small-6 columns">
				<div class="show-for-medium-up"><?php previous_post_link( '%link', '%title', TRUE ); ?></div>
			</div>
			
			<?php

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</div><!-- #content -->

<div class="clearfix"></div>

<?php
get_sidebar();
get_footer();
