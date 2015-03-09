<!-- Template for Home Page -->

<?php 
	get_header ();
?>
	
<section>
	<?php if ( have_posts() ) : while ( have_posts() : the_post(); ?>
</section>

<?php	
	get_footer ();	
?>