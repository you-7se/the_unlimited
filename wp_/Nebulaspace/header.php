<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ブログ | Sirius X</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.css" type="text/css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css">
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
        <?php wp_enqueue_script('jquery'); ?>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="bg">
            <div class="header-contents">
                <div class="header-area">
                    <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
                    <p class ="blog-expl"><?php bloginfo('description'); ?></p>
                </div>
            </div>
            
            <div class="breads">
                <?php mytheme_breadcrumb(); ?>
            </div>
            