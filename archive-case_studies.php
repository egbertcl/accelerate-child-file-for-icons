<?php

/**
 * The template for displaying archive case studies
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
      $image_1 = get_field('image_1');
    ?>

      <article class="archive-case-study">
        <aside class="archive-case-study-sidebar">
          <h2><?php the_title(); ?></h2>
          <h5 class="archive-case-study-title"><?php echo $services; ?></h5>
          <h6 class="archive-case-study-title">Client: <?php echo $client; ?></h6>

          <?php the_content(); ?>

          <p class="read-more-link"><strong><a href="<?php echo $link; ?>">Visit Live Site</a></strong></p>
        </aside>


        <div class="archive-case-study-one-img">
          <?php $size = "full"; ?>
          <a href="<?php the_permalink(); ?>" <figure>
            <?php if ($image_1) {
              echo wp_get_attachment_image($image_1, $size);
            } ?>
            </figure>
          </a>
        </div>


      <?php endwhile;  //end of the loop.
      ?>
      </article>
  </div>
</div>
<?php get_footer(); ?>