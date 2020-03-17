<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<div class="container">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="content">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>