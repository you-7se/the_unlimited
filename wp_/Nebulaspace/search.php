<?php get_header(); ?>

            <?php
              global $wp_query;
              $total_results = $wp_query->found_posts;
              $search_query = get_search_query();
            ?>
            
        <div id="mainContents" class="main-contents">
            <!-- 左カラム・コンテンツ -->
            <div id="mainContainer" class="entry-area">
                <div class="singles">
                    <h2 class="search_results page-title"><?php echo $search_query; ?>の検索結果<span>（<?php echo $total_results; ?>件）</span></h2>
                </div>
                <?php 
                    if( $total_results > 0 ) : 
                        if( have_posts() ) : 
                            while ( have_posts() ) : 
                                the_post();
                ?>
                    <div class="singles">
                        <h2 class="entry-title page-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry">
                            <!-- ここから記事本文 (抜粋を表示) -->
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
                        endif; 
                    else:
                        echo $search_query . 'に一致する情報は見つかりませんでした。';
                    endif; 
                ?>
            </div>
            
            <!-- 右カラム・メニューバー -->
            <div id="subContainer" class="item-area">
                <?php get_sidebar(); ?>
            </div>
        </div>

<?php get_footer(); ?>
