<?php get_header(); ?>

<div class="posts-list">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="post">
            <h2><?php the_title();?></h2>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</div>

<div class="sidebar">
    <?php dynamic_sidebar( 'posts-category-sidebar' ); ?>
</div>

<?php get_footer(); ?>
