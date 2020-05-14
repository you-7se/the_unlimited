<?php get_header(); ?>

            <div id="MainBlock">
                <div class="entry-area">
                        
                    <?php 
                      if( have_posts() ) : while ( have_posts() ) : the_post();
                      // カテゴリの取得
                      $html_category = '';
                      $separator = ', ';
                      $categories = get_the_category();
                      foreach ( $categories as $category ) {
                        $html_category .= '<span><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></span>' . $separator;
                      }
                      $html_category = rtrim( $html_category, $separator );
                    ?>
                        <div class="singles">
                            <h2 class="entry-title"><?php the_title(); ?></h2>
                            <h2 class="entry-data">Category：<?php echo $html_category; ?>　Comment：<a href="<?php comments_link(); ?>"><?php echo get_comments_number(); ?></a></h2>
                            <h3 class="entry-datetimes"><?php the_time('Y-m-d H:i:s'); ?> posted.</h3>
                            <div class="entry">
                                <!-- ここから記事本文 -->
                                <?php the_content(); ?>
                            </div>
                            <div class="borderline"></div>
                            <div class="comment-title">
                                <?php comments_template(); ?>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                        
                </div>
                <div class="item-area">
                    <?php get_sidebar(); ?>
                </div>
            </div>

<?php get_footer(); ?>
