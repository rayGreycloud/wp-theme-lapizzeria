<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<?php the_post_thumbnail(); ?>

<h2><?php the_title(); ?></h2>

<?php the_content(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
