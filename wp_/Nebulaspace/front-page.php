<?php get_header(); ?>

            <div id="MainBlock">
                <div class="main-area">
                    <div class="main-menu-links">
                        <p class="main-menu-bounce"><a href="<?php echo get_page_link( 10 ); ?>">記事一覧</a></p>
                        <p class="main-menu-bounce"><a href="<?php echo get_page_link( 53 ); ?>">カテゴリ一覧</a></p>
                        <p class="main-menu-bounce"><a href="<?php echo get_page_link( 3 ); ?>">プライバシーポリシー</a></p>
                        <p class="main-menu-bounce"><a href="<?php echo get_page_link( 9 ); ?>">お問い合わせ</a></p>                        
                    </div>
                    <div class="clear-floating"></div>
                    <div class="singles">
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                        <div class="entry">
                            <!-- ここから記事本文 -->
                            <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <?php the_post_thumbnail( array( 600, 600 ) ); ?>
                                <?php the_content(); ?>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="fc-white">
                        <p>最近投稿された記事</p>
                    </div>
                    <?php
                      $args = array(
                        'posts_per_page' => 5  // 表示する記事の最大数
                      );
                      $posts = get_posts( $args );
                      foreach ( $posts as $post ):
                      setup_postdata( $post );
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
                        <h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <h2 class="entry-data">Category：<?php echo $html_category; ?>　Comment：<a href="<?php comments_link(); ?>"><?php echo get_comments_number(); ?></a></h2>
                        <h3 class="entry-datetimes"><?php the_time('Y-m-d H:i:s'); ?> posted.</h3>
                        <div class="entry">
                            <!-- ここから記事本文 -->
                            <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
                        </div>
                    </div>
                    <?php
                      endforeach;
                      wp_reset_postdata(); // 直前のクエリを復元する
                    ?>                   
                </div>
            </div>

<?php get_footer(); ?>
