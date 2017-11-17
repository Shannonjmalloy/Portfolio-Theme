jQuery(document).ready(function($) {
	$(document).foundation();
	  // init Masonry
	  var $grid = $('.gridcontainer').masonry({
	  // options...
	    itemSelector: '.gridcontainer li'
	  });

	  // layout Masonry after each image loads
	  $grid.imagesLoaded().progress( function() {
	    $grid.masonry('layout');
	  });
	   

});