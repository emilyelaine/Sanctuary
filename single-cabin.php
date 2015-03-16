<?php 
/**
Template Name Posts: Studio Cabin Posts
*/
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="cabin-content">
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="cabin-background">
				<?php 
					if ( has_post_thumbnail() ) { 
					the_post_thumbnail();
				} ?>
			</div>
			
			
			<div class="cabin-gallery">
			
		  	 <?php 
		  	 	$images = get_field('gallery');
 		   	 if( $images ): ?>
      			 
      		 <div id="slider" class="flexslider">
       		  		<ul class="slides">
                			<?php foreach( $images as $image ): ?>
                    	<li>
                        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                       		<p class="flex-caption"><?php echo $image['caption']; ?></p>
                   		</li>
                			<?php endforeach; ?>
           			 </ul>
       		 </div>
    		<?php endif; ?>
			
			</div>
			
			<div class="cabin-content">
			
				<h1><?php the_title(); ?></h1>
			
				<div class="cabin-description">
					<?php the_field( 'cabin_description' ); ?>
				</div>
			
				<h2>Art making features&#58;</h2>
					<?php the_field( 'art_making_features' ); ?>
			
				<h2>Standard cabin features included&#58;</h2>
					<?php the_field( 'standard_cabin_features' ); ?>
			
				<div class="cabin-rates">
					<?php the_field( 'cabin_rates' ); ?>
				</div>
			
				<p><a href="#" title="Check Availability">Check Availability</a></p>

			</div>
			<?php endwhile; // end of the loop. ?>
		
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
