<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dme3115
 */
$web_image = get_field('web_image');
$print_image = get_field('print_image');
$photography_image = get_field('photography_image');

?>

	<div class="rows projectrow">
  <div class="small-12 medium-4 projectimg columns">
    <img src="<?php echo $web_image['url']; ?>"/>
  </div>
  <div class="small-12 medium-8 projectdescrip columns">
    <p class="nonmobile"><?php the_field('web_about'); ?></p> <br/>
    <a href="webprojects.html"><?php the_field('web_link'); ?> </a>
  </div>
  <div class="clearfix"></div>
</div>

<div class="rows projectrow">
  <div class="small-12 medium-4 projectimg columns">
    <img src="<?php echo $print_image['url']; ?>"/>
  </div>
  <div class="small-12 medium-8 projectdescrip columns">
    <p class="nonmobile"><?php the_field('print_about'); ?></p> <br/>
    <a href="printprojects.html"><?php the_field('print_link'); ?></a>
  </div>
  <div class="clearfix"></div>
</div>

<div class="rows projectrow">
  <div class="small-12 medium-4 projectimg columns">
    <img src="<?php echo $photography_image['url']; ?>"/>
  </div>
  <div class="small-12 medium-8 projectdescrip columns">
    <p class="nonmobile"><?php the_field('photography_about'); ?></p><br/>
    <a href=""><?php the_field('photography_link'); ?></a>
  </div>
  <div class="clearfix"></div>
</div>


<div class="clearfix"></div>

