<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<footer style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/footer.png)">
	<img src="<?php echo get_template_directory_uri(); ?>/images/footer.png" style="width:100%;opacity:0;" />
	<ul>
		<?php dynamic_sidebar( 'footer1-widget-area' );  ?>
	</ul>
	<ul>
		<?php dynamic_sidebar( 'footer2-widget-area' );  ?>
	</ul>
	<ul>
		<?php dynamic_sidebar( 'footer3-widget-area' );  ?>
	</ul>
	<ul>
		<?php dynamic_sidebar( 'footer4-widget-area' );  ?>
	</ul>
</footer>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>