# ITコンサルティング企業「TETOTE」（架空）の採用特設サイト

架空のITコンサルティング企業「TETOTE」の採用特設サイトを実装しました。  
Figmaのデザインカンプから静的コーディングを実施し、WordPress化まで行いました。


## 力を入れた点
FLOCSSのProjectレイヤーに独自ルールを追加したことです。
Projectレイヤーはページ全体に関するスタイルやセクション単位のスタイルが混在し、肥大化・煩雑化しやすいという課題がありました。  
そこでレイヤーを更に以下の3つに分類しました。  

1. ページ全体に関するスタイル（`p-page-*`）  
   例：`p-page-about`
2. セクション単位のスタイル（`p-sect-*`）  
   例：`p-sect-service`
3. その他のUIパーツ（`p-*`）  
   例：`p-media`

これにより、次の効果が得られました。
- 各クラスの役割が一目で分かり、可読性が向上
- 分類の基準が明確であるため、新たなクラスが増えても整理しやすくなり、保守性が改善


## ページ構成
- トップページ（`/`）
- 固定ページ×5
  - TETOTEについて（`/about-us`）
  - 福利厚生（`/benefits`）
  - 研修制度とキャリアパス（`/career`）
  - 募集要項（`/details`）
  - よくある質問（`/faq`）
- 採用ブログ（通常投稿）
  - 一覧ページ（`/blog`）
  - 個別ページ（`/blog/slug`）
- 社員紹介（カスタム投稿）
  - 一覧ページ（`/staff`）
  - 個別ページ（`/staff/slug`）
- エントリー（`/entry`）
- エントリー完了（`/entry-thanks`）


## デザインカンプ
`Figma`


## 使用した技術
- HTML/CSS/JavaScript（jQuery未使用）
- Sass（Dart Sass）
- WordPress
- PHP
- CSS設計（BEM/FLOCSS）


## 実装したWordPress機能
- トップページ（front-page.php）
- 固定ページ（page-slug.php）
- 通常投稿の一覧ページ（home.php）
- 通常投稿の個別記事ページ（single.php）
- カスタム投稿の一覧ページ（archive-slug.php）
- カスタム投稿の個別記事ページ（single-slug.php）
- エントリーフォーム（プラグイン「Contact Form 7」を使用）
- カスタムフィールド（プラグイン「Advanced Custom Fields」を使用）
- パンくずリスト（プラグイン「Breadcrumb NavXT」を使用）
- ページネーション（WordPress関数`the_posts_pagination()`を使用）


## 実装した機能およびUIパーツ
- ハンバーガーメニュー
- スムーススクロール
- スクロールスパイ
- スティッキーヘッダー
- フェードスライダー（swiperを使用）
- パンくずリスト
- ページネーション
- アコーディオン
- エントリーフォーム
- エントリーフォームで送信ボタンを押すと完了ページに遷移
- 社員紹介の詳細ページで、その他メンバー3人のカードをランダムに表示


## WAI-ARIA
まだまだ勉強中ですが、以下の点を意識して実装しました。  
- VSCodeの拡張機能`markuplint`と使ってWAI-ARIAの構文チェックをしながら実装
- セマンティックなHTML要素を使用
- 装飾目的だけの`svg`タグや`img`タグには`aria-hidden="true"`を適用
- テキスト量の多い図解を画像データで表示する場合、そのテキスト内容を`figcaption`タグで記述しておき、スクリーンリーダで読み上げはされるが`visually-hidden`で表示を隠すように実装（page-career.php）
