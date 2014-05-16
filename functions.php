<?php if(function_exists('register_sidebars'))
	{
		register_sidebars(2, array('name'=>'sidebar %d'));
	}
	
	function new_excerpt_more( $more ) {
	return ' <br /><br /><a class="read-more" href="http://www.shoesandblues.com/noria/archives">read more</a>';
	}

	add_filter( 'excerpt_more', 'new_excerpt_more' );
	
?>