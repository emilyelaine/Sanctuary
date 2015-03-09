<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sanctuary
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
			$social_links = array(
				'theme_location' => 'footer-nav',
				'container' => 'nav',
				'container_id' => 'footer-links',
				'container_class' => 'social-media-links',
				'depth' => 1
				);
		?>
		<?php wp_nav_menu( $social_links ); ?>
		<!-- 
			<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'sanctuary' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'sanctuary' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'sanctuary' ), 'sanctuary', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info --> 
		-->
		
		<p> &copy; copyright Sanctuary Eco-Retreat 2014</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
