<?php 

	define('WP_USE_THEMES', false); 
	require('header.php'); 
?>

	<div id="main" class="container">

<?php get_sidebar(); ?>

		<div id="news">
			<h1>News</h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				static $count = 0;
				if($count==1)
				{
					break;
				}
				else
				{ ?>
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
        	        <?php $count++; } endwhile; else: ?>
                	  	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                	<?php endif; ?>            
		</div>
			
	</div>

	<?php require('footer.php'); ?>
    
    </body>
    
</html>