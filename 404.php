<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dme3115
 */

get_header(); ?>

	  <div class="hero">
	  <h1>Oops! That page can&rsquo;t be found.</h1>
	  </div>
		<div class="content">
			<section class="error-404 not-found">

				<div class="page-content">
					<p><?php esc_html_e( 'I can&rsquo;t seem to find anything here, maybe one of these links are close to what you&rsquo;re looking for', 'dme3115' ); ?></p>

					<?php

						// Only show the widget if site has multiple categories.
						if ( dme3115_categorized_blog() ) :
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Projects', 'dme3115' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php
						endif;
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

</div>

<?php
get_footer();
