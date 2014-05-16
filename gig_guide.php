<?php 
/*
Template Name: News
*/
	
	define('WP_USE_THEMES', false); 
	require('header.php'); 
?>

	<div id="main" class="container">
	
		<?php while ( have_posts() ) : the_post(); ?>
			
			<article>
		
				<h1><?php the_title(); ?></h1>
				
				<div id="event_guide" class="text_body">

					<?php the_content(); ?>
					
				</div>
				
			</article>

		<?php endwhile; ?>

	</div>

	<?php require('footer.php'); ?>
    
    </body>
    
</html>