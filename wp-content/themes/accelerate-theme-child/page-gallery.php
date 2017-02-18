<?php
/**
 * Template Name: Gallery Page
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

<h1>Masonry - originLeft: false</h1>

<div class="grid">
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item grid-item--height2"></div>
</div>
