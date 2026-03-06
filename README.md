# 架空の採用特設サイト「TETOTE」

架空のITコンサルティング企業「TETOTE」の採用特設サイトです。  
Figmaのデザインカンプからコーディングし、WordPress化まで行いました。

## デザインツール
- Figma

## 実装機能・UIパーツ
- ハンバーガーメニュー
- スムーススクロール
- アコーディオン
- スティッキーヘッダー
- スライダー
- 入力フォーム
- パンくずリスト
- ページネーション

## 使用技術
- HTML5
- CSS / Sass (Dart Sass)
- JavaScript (ES6+)
- jQuery 3.7.1
- slick 1.8.1
- PHP 8.2.27

## CSS設計
- BEM + FLOCSS

### 独自運用ルール
Projectレイヤーが増えて煩雑化したので、更に以下の3つに分類しました。

1. ページ (`p-page-*`)  
   例：`p-page-about`
2. セクション (`p-sect-*`)  
   例：`p-sect-service`
3. 上記以外のパーツ (`p-*`)  
   例：`p-media`

### Component/Projectの違い
次のいずれかを満たす場合はProjectと判断しています。  
どちらも満たさないものがComponentです。

- 別のComponentまたはProjectを1個以上含んでいる。
- セクション単位またはページ単位の部品で、ページ固有である。

## WAI-ARIA
まだまだ勉強中ですが、以下の点を意識して実装しています。

- VSCodeの拡張機能`markuplint`と使ってWAI-ARIAの構文チェックをしながら実装
- セマンティックなHTML要素を使用
- 装飾目的だけの`svg`タグや`img`タグには`aria-hidden="true"`を適用
- テキスト量の多い図解を画像データで表示する場合、そのテキスト内容を`figcaption`タグで記述しておき、スクリーンリーダで読み上げはされるが`visually-hidden`で表示を隠すように実装（参照：`page-career.php`）
