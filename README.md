# TETOTE 採用特設サイト

架空のITコンサルティング企業「TETOTE」の採用特設サイトです。  
Figmaのデザインカンプからコーディングし、WordPress化まで行いました。

## デザインツール
- Figma

## 使用技術
- HTML5
- CSS / Sass (Dart Sass)
- JavaScript (ES6+)
- jQuery 3.7.1
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
