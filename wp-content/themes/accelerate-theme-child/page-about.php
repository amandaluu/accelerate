<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<section class="about-page">
	<div class="site-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="about-hero">
        <?php the_content(); ?>
		  </div>
    <?php endwhile; // end loop ?>
  </div><!-- .site-content -->
</section><!-- .about-page -->

<section class="intro">
  <div class="site-content">
    <?php while ( have_posts() ) : the_post();
      $intro_headline = get_field('intro_headline');
      $intro_copy = get_field('intro_copy'); ?>

      <div class="about-intro">
        <h2><?php echo $intro_headline; ?></h2>
        <p><?php echo $intro_copy; ?></p>
      </div>
    <?php endwhile; // end loop ?>
  </div><!-- .site-content -->
</section><!-- .intro -->

<?php get_footer(); ?>
