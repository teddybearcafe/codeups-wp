<?php

function add_files() {
    // Google Fontsの読み込み
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap', array(), null);
    
    // CSSファイルの読み込み
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), array(), '20250329.1900');
    
    // JavaScriptファイルの読み込み（順序が重要）
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.js', array(), null, true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('micromodal', 'https://unpkg.com/micromodal/dist/micromodal.min.js', array(), null, true);
    wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), null, true);
    wp_enqueue_script('micromodal-script', get_theme_file_uri('/assets/js/micromodal.js'), array(), null, true);
    wp_enqueue_script('theme-script', get_theme_file_uri('/assets/js/script.js'), array('jquery', 'swiper-js'), null, true);
}
// add_files()を呼び出す
add_action('wp_enqueue_scripts','add_files');

function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );


// WP-PageNaviのカスタマイズ
add_filter('wp_pagenavi', function($html) {
    // 前へ
    $html = str_replace(
      '« 前へ',
      '<svg class="nav-pagination__lt-icon" width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round">
      <path d="M9 1L1 9L9 17" />
      </svg>',
      $html
    );
  
    // 次へ
    $html = str_replace(
      '次へ »',
      '<svg class="nav-pagination__gt-icon" width="10" height="18" viewBox="0 0 10 18" xmlns="http://www.w3.org/2000/svg" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" fill="none">
      <path d="M1 1L9 9L1 17" />
      </svg>',
      $html
    );
  
    return $html;
  });

// Breadcrumb NavXTプラグインのカスタマイズ
function custom_breadcrumb_navxt() {
    if (function_exists('bcn_display_list')) {
        // Breadcrumb NavXTの出力をカスタマイズ
        ob_start();
        bcn_display_list();
        $breadcrumb = ob_get_clean();
        
        // 既存のクラス名をカスタムクラス名に置換
        $breadcrumb = str_replace('class="breadcrumb"', 'class="breadcrumb__list-item"', $breadcrumb);
        $breadcrumb = str_replace('class="breadcrumb-sep"', 'class="breadcrumb__separator"', $breadcrumb);
        $breadcrumb = str_replace('class="breadcrumb-link"', 'class="breadcrumb__list-item"', $breadcrumb);
        $breadcrumb = str_replace('class="breadcrumb-current"', 'class="breadcrumb__list-item"', $breadcrumb);
        
        // 区切り文字を「&gt;」に変更
        $breadcrumb = str_replace('&raquo;', '&gt;', $breadcrumb);
        $breadcrumb = str_replace('»', '&gt;', $breadcrumb);
        
        echo $breadcrumb;
    }
}


// Voiceアーカイブの表示件数変更
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_archive('voice') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '6' ); //表示件数を指定
    }
}

add_action( 'pre_get_posts', 'change_posts_per_page' );

// 「投稿」を別の名称に変更
function Change_menulabel() {
global $menu;
global $submenu;
$name = 'ブログ';
$menu[5][0] = $name;
$submenu['edit.php'][5][0] = $name.'一覧';
$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
global $wp_post_types;
$name = 'ブログ';
$labels = &$wp_post_types['post']->labels;
$labels->name = $name;
$labels->singular_name = $name;
$labels->add_new = _x('追加', $name);
$labels->add_new_item = $name.'の新規追加';
$labels->edit_item = $name.'の編集';
$labels->new_item = '新規'.$name;
$labels->view_item = $name.'を表示';
$labels->search_items = $name.'を検索';
$labels->not_found = $name.'が見つかりませんでした';
$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );


// body_class に独自クラスを追加
function my_body_classes( $classes ) {
  if ( is_404() ) {
    $classes[] = 'page404-body';
  }
  return $classes;
}
add_filter( 'body_class', 'my_body_classes' );

// SCF
/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 * 以下例
 * SCF::add_options_page( 'ページタイトル', 'メニュータイトル', 'manage_options', 'theme-options' );
 */
