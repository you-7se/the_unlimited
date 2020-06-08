                    <div class="social-links">
                        <!-- Twitter -->
                        <div class="social-link-twitter-button icon"><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" data-text="<?php the_title(); ?> | <?php bloginfo('name'); ?>">ツイート</a></div>
                        <!-- Facebook -->
                        <div class="fb-share-button icon" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">シェア</a></div>
                        <!-- Facebook (いいね！ボタン) -->
                        <div class="fb-like icon" data-href="<?php the_permalink(); ?>" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false">いいね！</div>
                        <!-- Hatena Bookmark -->
                        <div class="hatena-bookmark-button icon"><a href="https://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" data-hatena-bookmark-title="<?php wp_title(); ?>" data-hatena-bookmark-layout="basic-label-counter" data-hatena-bookmark-lang="ja" data-hatena-bookmark-width="115" data-hatena-bookmark-height="20" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/v4/public/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a></div>
                        <!-- Pocket -->
                        <div class="pocket-share-button icon"><a data-pocket-label="pocket" data-pocket-count="none" class="pocket-btn" data-lang="en"></a></div>
                        <!-- LINE -->
                        <div class="line-it-button icon" data-lang="ja" data-type="share-a" data-ver="3" data-url="<?php the_permalink(); ?>" data-color="default" data-size="small" data-count="false" style="display: none;"></div>
                    </div>
