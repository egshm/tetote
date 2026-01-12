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

  // Webフォント
  wp_enqueue_style('NotoSansJP', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap');
  wp_enqueue_style('Poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  wp_enqueue_style('Viga', 'https://fonts.googleapis.com/css2?family=Viga&display=swap');

  // CSS
  wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
  wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');

  // JavaScript
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), "3.7.1", array('in_footer' => true, 'strategy' => 'defer'));
  wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), "1.8.1", array('in_footer' => true, 'strategy' => 'defer'));
  wp_enqueue_script('tocbot', 'https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.32.2/tocbot.min.js', array(), "4.32.2", array('in_footer' => true, 'strategy' => 'defer'));
  wp_enqueue_script('inview', get_template_directory_uri() . '/js/jquery.inview.min.js', array('jquery'), "1.1.2", array('in_footer' => true, 'strategy' => 'defer'));
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', array('in_footer' => true, 'strategy' => 'defer'));
}
add_action('wp_enqueue_scripts', 'my_script_init');


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
