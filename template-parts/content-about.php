<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dme3115
 */
 $headshot = get_field('headshot');
 $skills = get_field('skills');
?>

	<div class="rows">
	  <div class="small-12 large-4 columns">
		<img src="<?php echo $headshot['url']; ?>"/>
	  </div>
	  <div class="small-12 large-8 columns">
	    <p>
	    	<?php the_field('about'); ?>
		</p>
		<br/>
	  </div>
	  <div class="clearfix"></div>
	</div>
	<div class="skills">
	  <img class="nonmobile" src="<?php echo $skills['url']; ?>" alt="My skills"/>
	</div>
	</div>
	<div class="resume">
		<h1>View my resume</h1>
	 <a href="<?php the_field('resume'); ?>" target="_blank"><i class="fa fa-file-pdf-o fa-5x" aria-hidden="true"></i> </a>
	</div>
	<div class="content">
	<div class="hireme">
	  <h2> <?php the_field('contact'); ?> </h2>
	  
	</div>

	<div class="clearfix"></div>
	</div>
