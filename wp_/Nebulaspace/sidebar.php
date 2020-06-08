<div class="item-search item-box">
    <p class="item-title">Webサイト内検索</p>
    <?php get_search_form(); ?>
</div>

<?php if ( is_active_sidebar('sidebar-1') ) : ?>
  <ul class="menu">
    <?php dynamic_sidebar('sidebar-1'); ?>
  </ul>
<?php endif; ?>