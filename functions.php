<?php
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');


function my_script_init()
{
  // デフォルトjQueryの読込み解除
  wp_deregister_script('jquery');

  // トップページ
  if (is_front_page()) {
    // Swiper
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.2.10');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), "11.2.10", array('in_footer' => true, 'strategy' => 'defer'));
  }
  // 個別記事投稿ページ（社員紹介）
  if (is_singular('staff')) {
    wp_enqueue_script('tocbot', 'https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.32.2/tocbot.min.js', array(), "4.32.2", array('in_footer' => true, 'strategy' => 'defer'));
  }

  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.min.css', array(), '1.0.0');
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.min.js', array(), '1.0.0', array('in_footer' => true, 'strategy' => 'defer'));
}
add_action('wp_enqueue_scripts', 'my_script_init');


// Contact Form 7 のアセット読み込みを制限
function limit_wpcf7_assets() {
  if (is_page('entry')) return;
  add_filter('wpcf7_load_js', '__return_false');
  add_filter('wpcf7_load_css', '__return_false');
}
add_action('wp', 'limit_wpcf7_assets');


// headタグ内で優先的に実行したいスクリプト
function my_high_priority_script() {
  echo <<<HIGH_PRIORITY_SCRIPT
    <script>
      document.documentElement.classList.add("js-enabled");
    </script>
    HIGH_PRIORITY_SCRIPT;
}
add_action('wp_head', 'my_high_priority_script', 1);


// アセットの読込みを最適化
function my_assets_load_optimize() {
  $theme_uri = get_template_directory_uri();

  $fonts = [
    'poppins-v24-latin-regular.woff2',
    'poppins-v24-latin-700.woff2',
    'viga-v15-latin-regular.woff2'
  ];

  foreach ($fonts as $font) {
    echo '<link rel="preload" href="' . $theme_uri . '/fonts/' . $font . '" as="font" type="font/woff2" crossorigin>' . "\n";
  }
  echo '<link rel="preload" as="style" href="' . $theme_uri . '/css/font.min.css">' . "\n";
  echo '<link rel="stylesheet" href="' . $theme_uri . '/css/font.min.css" media="print" onload="this.media=\'all\'">' . "\n";
  // フォールバック
  echo '<noscript><link rel="stylesheet" href="' . $theme_uri . '/css/font.min.css"></noscript>' . "\n";
}
add_action('wp_head', 'my_assets_load_optimize', 5);


// 通常投稿詳細ページのパンくずリストからカテゴリー階層を除外
function custom_breadcrumb_trim_category($trail) {
  if (is_single()) {
    foreach ($trail->breadcrumbs as $key => $crumb) {
      $types = $crumb->get_types();

      if (in_array('category', $types) && $key !== count($trail->breadcrumbs) - 2) {
        unset($trail->breadcrumbs[$key]);
      }
    }
    $trail->breadcrumbs = array_values($trail->breadcrumbs);
  }
  return $trail;
}
add_filter('bcn_after_fill', 'custom_breadcrumb_trim_category');


// Emoji機能を削除
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
