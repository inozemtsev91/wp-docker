<?php
/*
 * Template for page Contact Us
 * Template Name: Contact us
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<div class="page-wrap">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="page-title"> <?php the_title(); ?> </div>
        <div class="page-content"><?php the_content(); ?></div>
    <?php endwhile; ?>
</div>

<div class="meta"><?php the_meta(); ?></div>

<?php get_footer(); ?>
