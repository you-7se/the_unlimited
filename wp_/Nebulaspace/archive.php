<?php get_header(); ?>

        <div id="mainContents" class="main-contents">
            <!-- 左カラム・コンテンツ -->
            <div id="mainContainer" class="entry-area">
                <?php
                    // 投稿の取得を試す
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            // 記事の取得
                            the_post();

                            // 記事カテゴリの取得
                            $post_id = get_the_ID();
                            $html_category = get_categories_for_entry( $post_id );

                            // 更新日時の取得
                            $updated_date = the_last_updated_for_entry( $post_id );

                            // 投稿日付が現時点より一定期間内であれば、任意のタグを追加する (最新記事に「NEW！」アイコンを付与する)
                            $post_date = new datetime(get_the_time( 'Y-m-d H:i:s' ));
                            $now_date = new datetime( date("Y-m-d H:i:s", strtotime("-5 day")) );
                            // 5日以内に投稿された記事について下記のHTMLタグを追加する
                            if ( $post_date >= $now_date ) :
                                $bland_new_mark = '<div class="bland-new"></div>';
                            else :
                                $bland_new_mark = '';
                            endif;
                ?>
                <div class="singles">
                    <h2 class="entry-title"><?php echo $bland_new_mark; ?><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <h2 class="entry-data">Category：<?php echo $html_category; ?>　Comment：<a href="<?php comments_link(); ?>"><?php echo get_comments_number(); ?></a></h2>
                    <h3 class="entry-datetimes"><?php the_time('Y-m-d H:i:s'); ?> posted.</h3>
                    <h3 class="entry-datetimes"><?php echo $updated_date; ?></h3>
                    <div class="entry">
                        <!-- ここから記事本文 -->
                        <?php the_excerpt(); ?>
                        <a href="<?php echo get_permalink(); ?>">＜続きを読みます＞</a>
                    </div>
                </div>
                <?php
                        endwhile;
                        // ぺージネーション
                        if ( function_exists( 'pagination' ) ) :
                            pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
                        endif;

                    else :
                        echo 'まだ記事がありません。';
                    endif;
                ?>
            </div>

            <!-- 右カラム・メニューバー -->
            <div id="subContainer" class="item-area">
                <?php get_sidebar(); ?>
            </div>
        </div>

<?php get_footer(); ?>
