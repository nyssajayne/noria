<?php 
/*
Template Name: Archive */
	
	define('WP_USE_THEMES', false); 
	require('header.php'); 
?>

	<div id="main" class="container">
	
		<article>
		
			<h1>Latest News</h1>
			
			<div class="text_body">
		
				<?php 
			
				$args = array( 'posts_per_page' => 5 );

				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<p><?php echo get_the_date(); ?></p>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
					<p>&nbsp;</p>
				<?php endforeach; 
				wp_reset_postdata();?> 
			
			</div>
		
		</article>

	</div>

	<?php require('footer.php'); ?>
    
    </body>
    
</html>