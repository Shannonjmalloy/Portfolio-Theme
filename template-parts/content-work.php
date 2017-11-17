<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dme3115
 */

?>
		<div class="project-section">
		   <h2>THE VISION</h2>
		</div>

		<div class="rows">
		  <div class="small-12 large-4 columns">
		    <h3> <?php the_field('type_of_work'); ?></h3>
		  </div>
		  <div class="small-12 large-8 columns">
		    <p> 
		      <?php the_field('Introduction'); ?>
		    </p>
		  </div>
		  <div class="clearfix"></div>
		</div>

		<div class="sketches">
		<div class="small-12">
			<?php the_field('sketches'); ?>
		</div>
		</div>

		<div class="project-section">
		  <h2>FINAL PRODUCT</h2>
		</div>
		<div class="finalproduct">
		<div class="small-12">
			<?php the_field('the_project'); ?>
		</div>
		</div>
