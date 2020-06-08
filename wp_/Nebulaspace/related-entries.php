<?php
    //カテゴリ情報から関連記事を10個ランダムに呼び出す
    $categories = get_the_category( $post->ID );
    $category_ID = array();
    foreach( $categories as $category ) :
        array_push( $category_ID, $category->cat_ID );
    endforeach;
    
    $args = array(
      'post__not_in' => array( $post->ID ),
      'posts_per_page'=> 10,
      'category__in' => $category_ID,
      'orderby' => 'rand',
    );
    $query = new WP_Query($args);
?>

<?php
    if( $query -> have_posts() ) :
        while ( $query -> have_posts() ) : 
            $query -> the_post();
?>
    <div class="related-entry">
        <div class="related-entry-thumb">
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <?php 
                if ( has_post_thumbnail() ):  // サムネイルを持っているとき
                    echo get_the_post_thumbnail($post->ID, 'thumbnail-100');  //サムネイルを呼び出す
                else: // サムネイルを持っていないとき
            ?>
            <img src="<?php echo get_template_directory_uri(); ?>/image/no-image.png" alt="NO IMAGE" title="NO IMAGE" width="100px" />
            <?php endif; ?>
            </a>
        </div><!-- /.related-entry-thumb -->
          
        <div class="related-entry-content">
            <h4 class="related-entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); //記事のタイトル ?></a></h4>
            <p class="related-entry-snippet"><?php the_excerpt(); ?></p>
            <p class="related-entry-read"><a href="<?php the_permalink(); ?>">記事を読む</a></p>
            <div class="clear-floating"></div>
        </div><!-- /.related-entry-content -->
    </div><!-- /.new-entry -->
      
    <?php 
        endwhile;
    else : 
    ?>
    <p>関連する記事はありません。</p>
<?php
    endif;
    wp_reset_postdata();
?>
