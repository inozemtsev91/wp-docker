<?php get_header(); ?>

<?php
    function get_review_custom_meta($meta_key) {
        return get_post_meta(get_the_ID(), $meta_key, 1);
    }
?>

<div class="reviews-list">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="review">
            <div class="review-header">
                <div class="review-header_thumbnail">
                    <?php the_post_thumbnail( review_thumbnail ); ?>
                </div>
                <div class="review-header_content">
                    <div class="review-title"><?php the_title();?></div>
                    <div class="review-cat-age">
                        Age: <?php echo get_review_custom_meta('wpcf-age'); ?>
                    </div>
                    <div class="review-cat-owner">
                        Owner: <?php echo get_review_custom_meta('wpcf-company'); ?>
                    </div>
                </div>
            </div>
            <div class="review-content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
