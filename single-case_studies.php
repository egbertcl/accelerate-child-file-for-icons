<?php

/**
 * The template for displaying a single case study
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>



<div id="primary" class="site-content sidebar">
  <div class="main-content" role="main">
    <?php while (have_posts()) : the_post();
      $services = get_field('services');
      $client = get_field('client');
      $link = get_field('site_link');
      $image1 = get_field('image1');
      $image2 = get_field('image2');
      $image3 = get_field('image3'); ?>

      <article class="case-study">
        <aside class="case-study-sidebar">
          <h2><?php the_title(); ?></h2>
          <h5 class="case-study-sidebar"><?php echo $services; ?></h5>
          <h6 class="case-study-sidebar">Client: <?php echo $client; ?></h6>

          <?php the_content(); ?>

          <p class="read-more-link"><strong><a href="<?php echo $link; ?>">Visit Live Site</a></strong></p>
        </aside>

        <div class="case-study-images">
          <?php $size = "full"; ?>
          <?php if ($image1) {
            echo wp_get_attachment_image($image1, $size);
          } ?>
          <?php if ($image2) {
            echo wp_get_attachment_image($image2, $size);
          } ?>
          <?php if ($image3) {
            echo wp_get_attachment_image($image3, $size);
          } ?>
        </div>

      <?php endwhile;  //end of the loop.
      ?>
      </article>
  </div>
</div>
<?php get_footer(); ?>