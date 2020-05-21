<?php get_header(); ?>

            <div id="MainBlock">
                <div class="entry-area">
                    <div class="singles">
                        <h2 class="entry-title page-title">404 Not Found（ページが見つかりませんでした）</h2>
                        <div class="entry">
                            <h3>指定した以下のぺージは存在しないか、移動または削除された可能性があります。</h3>
                            <p>URL ：<span><?php echo get_pagenum_link(); ?></span></p>
                            <p>現在表示する記事がありません。よろしければ、検索ボックスにお探しのコンテンツに該当するキーワードを入力して下さい。</p>
                        </div>
                        <div class="borderline"></div>
                        <p><a href="<?php echo home_url(); ?>">トップページへ</a></p>
                    </div>
                </div>
                <div class="item-area">
                    <?php get_sidebar(); ?>
                </div>
            </div>

<?php get_footer(); ?>
