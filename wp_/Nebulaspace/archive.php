<?php get_header(); ?>

            <div id="MainBlock">
                <div class="entry-area">
                        
                    <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="singles">
                            <h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <h2 class="entry-data">Category：雑記　Comment：0</h2>
                            <h3 class="entry-datetimes">2020-01-01 12:30:00 posted.</h3>
                            <div class="entry">
                                <!-- ここから記事本文 -->
                                <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                        
                </div>
                <div class="item-area">
                    <?php get_sidebar(); ?>
                </div>
            </div>

<?php get_footer(); ?>
