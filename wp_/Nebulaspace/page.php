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
                            
                            // 更新日時の取得
                            $post_id = get_the_ID();
                            $updated_date = the_last_updated_for_entry( $post_id );
                ?>
                <div class="singles">
                    <h2 class="entry-title page-title"><?php the_title(); ?></h2>
                    <h3 class="entry-datetimes"><?php the_time('Y-m-d H:i:s'); ?> posted.</h3>
                    <h3 class="entry-datetimes"><?php echo $updated_date; ?></h3>
                    <!-- ソーシャルシェアリンク集 -->
                    <?php include("snslink.php"); ?>
                    <div class="entry">
                        <!-- ここから記事本文 -->
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php
                        endwhile;
                        
                    endif;
                ?>
            </div>
            
            <!-- 右カラム・メニューバー -->
            <div id="subContainer" class="item-area">
                <?php get_sidebar(); ?>
            </div>
        </div>

<?php get_footer(); ?>
