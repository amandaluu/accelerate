<?php
/**
 * The template for displaying the Our Services page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
  <div id="content" role="main">

    <?php while ( have_posts() ) : the_post();
      $size = "full";
      $service_image = get_field('service_image'); ?>

      <article class="service">
        <div class="service-image">
          <?php if($service_image) { ?>
          <?php echo wp_get_attachment_image( $service_image, $size ); ?>
          <?php } ?>
        </div>
        <div class="service-content">
          <h2><?php the_title (); ?></h2>
          <?php the_content(); ?>
        </div>
      </article>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
