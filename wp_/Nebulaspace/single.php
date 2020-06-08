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
                ?>
                <div class="singles">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                    <h2 class="entry-data">Category：<?php echo $html_category; ?>　Comment：<a href="<?php comments_link(); ?>"><?php echo get_comments_number(); ?></a></h2>
                    <h3 class="entry-datetimes"><?php the_time('Y-m-d H:i:s'); ?> posted.</h3>
                    <h3 class="entry-datetimes"><?php echo $updated_date; ?></h3>
                    <!-- ソーシャルシェアリンク集 -->
                    <?php include("snslink.php"); ?>
                    <div class="entry">
                        <!-- ここから記事本文 -->
                        <?php the_content(); ?>
                    </div>
                    <div class="horizontal-rule"></div>
                    <div class="comment-title">
                        <?php comments_template(); ?>
                    </div>
                </div>
                <?php
                        endwhile;
                        
                        // 前の記事・次の記事へのリンク
                        echo '<div class="post-steps">';
                        if ( get_previous_post() ) :
                            echo '<div class="prev-pager">';
                            previous_post_link('&laquo; %link', '%title');
                            echo '</div>';
                        endif;
                        
                        if ( get_next_post() ) :
                            echo '<div class="next-pager">';
                            next_post_link('%link &raquo;', '%title');
                            echo '</div>';
                        endif;
                        echo '</div><div class="clear-floating"></div>';
                        
                    endif;
                ?>
                
                <!-- 関連記事をランダムに抽出して表示 -->
                <div class="singles related-entries">
                    <h3 class="entry-title page-title">関連記事</h3>
                    <?php include( TEMPLATEPATH . '/related-entries.php' ); ?>
                </div>
            </div>
            
            <!-- 右カラム・メニューバー -->
            <div id="subContainer" class="item-area">
                <?php get_sidebar(); ?>
            </div>
        </div>

<?php get_footer(); ?>
