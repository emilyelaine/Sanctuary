<!-- Template for Home Page -->

<?php 
	get_header ();
?>
	<section>
		<img id="mainimg1" src="<?php the_field ( 'main_img' ); ?>">
		<p id="imgheadline1"><?php the_field ( 'image_headline' ); ?></p>
		<p id="imgdescription1"><?php the_field ( 'image_description' ); ?></p>
	</section>
		<section>
		<img id="mainimg2" src="<?php the_field ( 'main_img2' ); ?>">
		<p id="imgheadline2"><?php the_field ( 'image_headline2' ); ?></p>
		<p id="imgdescription2"><?php the_field ( 'image_description2' ); ?></p>
	</section>
	<section>
		<img id="mainimg3" src="<?php the_field ( 'main_img3' ); ?>">
		<p id="imgheadline3"><?php the_field ( 'image_headline3' ); ?></p>
		<p id="imgdescription3"><?php the_field ( 'image_description3' ); ?></p>
	</section>
	<section>
		<img id="mainimg4" src="<?php the_field ( 'main_img4' ); ?>">
		<p id="imgheadline4"><?php the_field ( 'image_headline4' ); ?></p>
		<p id="imgdescription4"><?php the_field ( 'image_description4' ); ?></p>
	</section>
	<section>
		<img id="mainimg5" src="<?php the_field ( 'main_img5' ); ?>">
		<p id="imgheadline5"><?php the_field ( 'image_headline5' ); ?></p>
		<p id="imgdescription5"><?php the_field ( 'image_description5' ); ?></p>
	</section>

<?php	
	get_footer ();	
?>