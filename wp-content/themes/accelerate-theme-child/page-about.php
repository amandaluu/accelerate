<?php
/**
 * The template for displaying the About page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<!-- Hero Area -->
<section class="hero-image">
	<div class="site-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="hero-content">
        <?php the_content(); ?>
		  </div>
    <?php endwhile; // end loop ?>
  </div>
</section>

<!-- Our Services -->
<section>
  <div class="site-content">
    <?php while ( have_posts() ) : the_post();
      $intro_headline = get_field('intro_headline');
      $intro_copy = get_field('intro_copy'); ?>
      <div class="about-intro">
        <h2><?php echo $intro_headline; ?></h2>
        <p><?php echo $intro_copy; ?></p>
      </div>
    <?php endwhile; // end loop ?>
  </div>
</section>

<!-- Service Detail // created with advanced custom fields -->
<section>
	<div class="site-content">
		<?php while ( have_posts() ) : the_post();
      $size = "full";
      $service_image_1 = get_field('service_image_1');
			$service_title_1 = get_field('service_title_1');
			$service_description_1 = get_field('service_description_1');
			$service_image_2 = get_field('service_image_2');
			$service_title_2 = get_field('service_title_2');
			$service_description_2 = get_field('service_description_2');
			$service_image_3 = get_field('service_image_3');
			$service_title_3 = get_field('service_title_3');
			$service_description_3 = get_field('service_description_3');
			$service_image_4 = get_field('service_image_4');
			$service_title_4 = get_field('service_title_4');
			$service_description_4 = get_field('service_description_4'); ?>

			<div class="service">
				<!-- Service 1 -->
        <div class="service-image-left">
          <?php if($service_image_1) { ?>
          	<?php echo wp_get_attachment_image( $service_image_1, $size ); ?>
          	<?php } ?>
        </div>
        <div class="service-content-left">
          <h2><?php echo $service_title_1; ?></h2>
					<p><?php echo $service_description_1; ?></p>
        </div>
				<!-- Service 2 -->
				<div class="service-image-right">
					<?php if($service_image_2) { ?>
						<?php echo wp_get_attachment_image( $service_image_2, $size ); ?>
						<?php } ?>
				</div>
				<div class="service-content-right">
					<h2><?php echo $service_title_2; ?></h2>
					<p><?php echo $service_description_2; ?></p>
				</div>
			<!-- Service 3 -->
				<div class="service-image-left">
					<?php if($service_image_3) { ?>
						<?php echo wp_get_attachment_image( $service_image_3, $size ); ?>
						<?php } ?>
				</div>
				<div class="service-content-left">
					<h2><?php echo $service_title_3; ?></h2>
					<p><?php echo $service_description_3; ?></p>
				</div>
				<!-- Service 4 -->
				<div class="service-image-right">
					<?php if($service_image_4) { ?>
						<?php echo wp_get_attachment_image( $service_image_4, $size ); ?>
						<?php } ?>
				</div>
				<div class="service-content-right">
					<h2><?php echo $service_title_4; ?></h2>
					<p><?php echo $service_description_4; ?></p>
				</div>

			</div>
		<?php endwhile; // end loop ?>
	</div>
</section>

<?php get_footer(); ?>
