<?php get_header(); ?>

            <?php
              global $wp_query;
              $total_results = $wp_query->found_posts;
              $search_query = get_search_query();
            ?>
            
            <div id="MainBlock">
                <div class="entry-area">
                    <div class="singles">
                        <h2 class="search_results page-title"><?php echo $search_query; ?>の検索結果<span>（<?php echo $total_results; ?>件）</span></h2>
                    </div>
                    <?php 
                      if( $total_results >0 ) : if( have_posts() ) : while ( have_posts() ) : the_post();
                    ?>
                        <div class="singles">
                            <h2 class="entry-title page-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="entry">
                                <!-- ここから記事本文 -->
                                <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
                            </div>
                        </div>
                    <?php endwhile; endif; else: ?>
                    
                    <?php echo $search_query; ?> に一致する情報は見つかりませんでした。
                    
                    <?php endif; ?>
                </div>
                <div class="item-area">
                    <?php get_sidebar(); ?>
                </div>
            </div>

<?php get_footer(); ?>
