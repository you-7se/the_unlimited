<div class="item-search">
    <p class="item-title">Webサイト内検索</p>
    <?php get_search_form(); ?>
</div>

<!--
    <h2 class="item-title">カテゴリ一覧</h2>
    <p class="parent-category">お知らせ</p>
    <p class="child-category">更新情報</p>
    <p class="parent-category">学問</p>
    <p class="child-category">語学・コミュニケーション</p>
    <p class="child-category">お金・投資学</p>
    <p class="child-category">倫理観・法学</p>
    <p class="child-category">数学・解析学</p>
    <p class="child-category">生命・自然学</p>＋栄養管理
    <p class="child-category">国家・世界・統制</p>
    <p class="child-category">文明・情報社会</p>
    <p class="parent-category">経済／時事</p>
    <p class="child-category">トレンドネタ</p>
    <p class="child-category">金融動向</p>
    <p class="child-category">環境・自然</p>
    <p class="parent-category">エンタメ／文化</p>
    <p class="child-category">音楽</p>
    <p class="child-category">スポーツ</p>
    <p class="child-category">テレビ・芸能</p>
    <p class="child-category">ゲーム</p>
    <p class="child-category">写真・動画</p>
    <p class="child-category">車・乗り物</p>
    <p class="child-category">世界の国</p>
    <p class="child-category">小説・創作</p>
    <p class="child-category">その他</p>
    <p class="parent-category">デジタル／インターネット</p>
    <p class="child-category">プログラミング</p>
    <p class="child-category">SNSトレンド</p>
    <p class="child-category">情報セキュリティ</p>
    <p class="child-category">YouTube</p>
    <p class="child-category">オンライン通信販売</p>
    <p class="child-category">パソコン雑学</p>
-->

<?php if ( is_active_sidebar('sidebar-1') ) : ?>
  <ul class="menu">
    <?php dynamic_sidebar('sidebar-1'); ?>
  </ul>
<?php endif; ?>