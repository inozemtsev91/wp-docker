<?php
    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 520,
        'height'      => 300,
        'flex-width'  => true,
    ));

    register_sidebar( array(
        'id'          => 'posts-category-sidebar',
        'name'        => __( 'posts-category-sidebar', $text_domain ),
        'description' => __( 'This sidebar is located in archive page', $text_domain ),
    ) );

    add_image_size( review_thumbnail, 100, 100, true );
?>