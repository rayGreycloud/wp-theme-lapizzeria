<?php get_header(); ?>

<?php
  $blog_page = get_option('page_for_posts');
  $imageId = get_post_thumbnail_id($blog_page);
  $image = wp_get_attachment_image_src($imageId, 'full');

 ?>


<div class="hero" style="background-image:url(<?php echo $image[0]; ?>)">
  <div class="hero-content">
    <div class="hero-text">
      <h2><?php echo get_the_title($blog_page); ?></h2>
    </div>
  </div>
</div>

<div class="main-content container">
  <main class="text-center content-text">
  <?php while(have_posts()): the_post(); ?>

  <?php the_content(); ?>

  <?php endwhile; ?>


  </main>
</div>

<?php get_footer(); ?>
