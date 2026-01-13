# TETOTE 採用特設サイト

架空のITコンサルティング企業「TETOTE」の採用特設サイトです。  
Figmaのデザインカンプからコーディングし、WordPress化まで行いました。

## デザインツール
- Figma

## 開発言語
- HTML5
- CSS / Sass (Dart Sass)
- JavaScript(ES6+)
- jQuery 3.7.1
- PHP 8.2.27

## CSS設計
- BEM + FLOCSS

### 独自運用ルール
Projectレイヤーが増えて煩雑化したので、Projectを更に以下の3つに分類しました。

1. ページBlock (`p-page-*`)  
   例：`p-page-about`
2. セクションBlock (`p-sect-*`)  
   例：`p-sect-service`
3. 上記以外のパーツBlock (`p-*`)  
   例：`p-media`
