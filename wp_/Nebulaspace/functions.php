<?php
 
function mytheme_setup() {
	add_theme_support( 'title-tag' );				//タイトルタグを追加
	add_theme_support( 'automatic-feed-links' );			//自動フィードリンクの追加
	add_theme_support( 'post-thumbnails' );				//投稿サムネイルの有効化
	register_nav_menu( 'header-navigation', 'Header Navigation' );	//ナビゲーションメニューの有効化
	if ( !isset( $content_width ) ) $content_width = 600;	//コンテンツの横幅
	add_theme_support( 'custom-background' );		//カスタム背景の有効化
	add_theme_support( 'custom-header', array(		//カスタムヘッダーの有効化
		// ヘッダー画像の横幅
		'width' => 1200,
		// ヘッダー画像の縦幅
		'height' => 198,
	) );
}
add_action( 'after_setup_theme', 'mytheme_setup' );
 
function mytheme_widgets_init() {
	//ウィジェットの有効化
	register_sidebar( array(
		'name' => 'widget',
		'id' => 'sidebar-1',
	) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );
 
function mytheme_scripts() {
	//スタイルシートを読み込み
	wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );
	//コメントの返信部分で、枠をすぐ下に表示する
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

function mytheme_breadcrumb() {
	//HOME>と表示
	$sep = ' > ';
	echo '<a href="'.get_bloginfo('url').'" >HOME</a>';
	echo $sep;
 
	//投稿記事ページとカテゴリーページでの、カテゴリーの階層を表示
	$cats = '';
	$cat_id = '';
	if ( is_single() ) {
		$cats = get_the_category();
		if( isset($cats[0]->term_id) ) $cat_id = $cats[0]->term_id;
	}
	else if ( is_category() ) {
		$cats = get_queried_object();
		$cat_id = $cats->parent;
	}
	$cat_list = array();
	while ($cat_id != 0){
		$cat = get_category( $cat_id );
		$cat_link = get_category_link( $cat_id );
		array_unshift( $cat_list, '<a href="'.$cat_link.'">'.$cat->name.'</a>' );
		$cat_id = $cat->parent;
	}
	foreach($cat_list as $value){
		echo ''.$value.'';
		echo $sep;
	}
 
	//現在のページ名を表示
	if ( is_singular() ) {
		if ( is_attachment() ) {
			previous_post_link( '%link' );
			echo $sep;
		}
		the_title();
	}
	else if( is_archive() ) the_archive_title();
	else if( is_search() ) echo '検索 : '.get_search_query();
	else if( is_404() ) echo 'ページが見つかりません';
}