<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dme3115
 */

get_header(); ?>

  <div class="hero">
  <h1>Projects</h1>
  </div>
  <div class ="clearfix"></div>
	<div class="content">
		<div class="grid projpicrow">
		  <div class="small-12">
		      <ul class="gridcontainer small-block-grid-1 medium-block-grid-3 large-block-grid-4">

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>
			<li>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
			</li>
			<?php
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

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
</div>

<?php
get_sidebar();
get_footer();
