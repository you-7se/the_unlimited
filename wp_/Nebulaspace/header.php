<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ブログ | Sirius X</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.css" type="text/css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom-design.css" type="text/css">
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
        <?php wp_enqueue_script('jquery'); ?>
        <?php wp_head(); ?>

        <?php
            // 【JavaScriptを使用】 ナビゲーションメニューバーを固定
            if ( is_admin_bar_showing() ) {
                $add_class_value = "nav.addClass('fixed-admin'); head.addClass('fixed');";
                $remove_class_value = "nav.removeClass('fixed-admin'); head.removeClass('fixed');";
            }
            else {
                $add_class_value = "nav.addClass('fixed'); head.addClass('fixed');";
                $remove_class_value = "nav.removeClass('fixed'); head.removeClass('fixed');";
            }
        ?>
        <script type="text/javascript">
            jQuery(function($) {
                var nav = $('#naviMenu'), head = $('#headerArea');
                var buffer_ceil = $('#wpadminbar').height();
                ioffset = nav.offset();
                $(window).scroll(function () {
                    if($(window).scrollTop() + buffer_ceil > ioffset.top) {
                        <?php echo $add_class_value; ?>
                    }
                    else {
                        <?php echo $remove_class_value; ?>
                   }
                });
            });
        </script>
    </head>
    <body>
        <!-- Facebookシェアボタン、Twitterシェアボタン、はてなブックマークシェアボタン、Pocketシェアボタン、LINEで送るボタン -->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v7.0"></script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.async=true;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
        <script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
        <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
        <!-- ここまで -->

        <div id="naviMenu" class="navigation-menu-bar">
            <!-- ナビゲーションメニューを追加する -->
            <?php wp_nav_menu(); ?>
        </div>

        <div id="headerArea" class="header-contents">
            <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
            <p class ="blog-expl"><?php bloginfo('description'); ?></p>
        </div>

        <div class="breads">
            <?php breadcrumbs(); ?>
        </div>
