<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
    <?php wp_head() ?>
</head>
<body>
  <div class="wrapper">
    <div class="site-header">
        <div class="site-logo"><?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            ?></div>
        <?php wp_nav_menu(array('top')); ?>
    </div>