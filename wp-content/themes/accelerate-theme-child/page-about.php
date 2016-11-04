<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="about-wrapper">
		<div id="content" role="main" class="about-content">
			<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title (); ?></h2>
					<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
