<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
  <div class="hero-content">
    <div class="hero-text">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>
</div>

<div class="main-content container">
  <main class="content-text">
    <div class="entry-information">
      <div class="date">
        <time>
          <?php echo the_time('d'); ?>              <span><?php echo the_time('M') ?></span>
        </time>
      </div>
      <p class="author">
        <i class="fa fa-user" aria-hidden="true"></i>
        <?php the_author(); ?>
      </p>
    </div>
    <?php the_content(); ?>
  </main>
</div>

<div class="container comments">
  <?php comment_form(); ?>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>
