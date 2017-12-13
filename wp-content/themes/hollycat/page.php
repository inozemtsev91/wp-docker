<?php get_header(); ?>

<div class="page-wrap">
<?php while ( have_posts() ) : the_post(); ?>
  <div class="page-title"> <?php the_title(); ?> </div>
  <div class="page-content"><?php the_content(); ?></div>
<?php endwhile; ?>
</div>

<?php get_footer(); ?>
