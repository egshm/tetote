# 品質チェックリスト

## トップページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/4/29||
|3|横スクロールしないこと|OK|2026/4/29||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/4/29||
|5|フォントの色が適切であること（`color`）|OK|2026/4/29||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/4/29||
|7|文章の行間が適切であること（`line-height`）|OK|2026/4/29||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/4/29||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/3||
|10|ページ内外リンクが適切に動作すること|OK|2026/4/29||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/4/29||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/4/29||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/4/29||
|16|ファビコンが適切に表示されていること|OK|2026/4/29||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/4/29|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/4/29||
||- iPad（768 × 1024）|OK|2026/4/29||
||- iPad Pro（834 × 1112）|OK|2026/4/29||
||- iPhone 6.7.8（375 × 667）|OK|2026/4/29||
||- iPhone XR（414 × 896）|OK|2026/4/29||
||- Laptop1（1440 × 900）|OK|2026/4/29||
||- Laptop2（1920 × 1080）|OK|2026/4/29||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/4/29||
||- Windows / Firefox|OK|2026/4/29||
||- Windows / Microsoft Edge|OK|2026/4/30||
||- Windows / Safari（Playwrightで確認）|OK|2026/4/30||
||- iOS / Chrome|OK|2026/4/30||
||- iOS / Firefox|OK|2026/4/30||
||- iOS / Safari|OK|2026/4/30||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Aboutページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/4/30||
|3|横スクロールしないこと|OK|2026/4/30||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/4/30||
|5|フォントの色が適切であること（`color`）|OK|2026/4/30||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/4/30||
|7|文章の行間が適切であること（`line-height`）|OK|2026/4/30||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/4/30||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/3||
|10|ページ内外リンクが適切に動作すること|OK|2026/4/30||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/4/30||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/4/30||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/4/30||
|16|ファビコンが適切に表示されていること|OK|2026/4/30||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/4/30|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/4/30||
||- iPad（768 × 1024）|OK|2026/4/30||
||- iPad Pro（834 × 1112）|OK|2026/4/30||
||- iPhone 6.7.8（375 × 667）|OK|2026/4/30||
||- iPhone XR（414 × 896）|OK|2026/4/30||
||- Laptop1（1440 × 900）|OK|2026/4/30||
||- Laptop2（1920 × 1080）|OK|2026/4/30||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/4/30||
||- Windows / Firefox|OK|2026/4/30||
||- Windows / Microsoft Edge|OK|2026/4/30||
||- Windows / Safari（Playwrightで確認）|OK|2026/4/30||
||- iOS / Chrome|OK|2026/4/30||
||- iOS / Firefox|OK|2026/4/30||
||- iOS / Safari|OK|2026/4/30||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Staffページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/4/30||
|3|横スクロールしないこと|OK|2026/4/30||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/4/30||
|5|フォントの色が適切であること（`color`）|OK|2026/4/30||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/4/30||
|7|文章の行間が適切であること（`line-height`）|OK|2026/4/30||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/4/30||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/3||
|10|ページ内外リンクが適切に動作すること|OK|2026/4/30||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/4/30||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/4/30||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/4/30||
|16|ファビコンが適切に表示されていること|OK|2026/4/30||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/4/30|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/4/30||
||- iPad（768 × 1024）|OK|2026/4/30||
||- iPad Pro（834 × 1112）|OK|2026/4/30||
||- iPhone 6.7.8（375 × 667）|OK|2026/4/30||
||- iPhone XR（414 × 896）|OK|2026/4/30||
||- Laptop1（1440 × 900）|OK|2026/4/30||
||- Laptop2（1920 × 1080）|OK|2026/4/30||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/4/30||
||- Windows / Firefox|OK|2026/4/30||
||- Windows / Microsoft Edge|OK|2026/4/30||
||- Windows / Safari（Playwrightで確認）|OK|2026/4/30||
||- iOS / Chrome|OK|2026/4/30||
||- iOS / Firefox|OK|2026/4/30||
||- iOS / Safari|OK|2026/4/30||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Staff詳細ページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/4/30||
|3|横スクロールしないこと|OK|2026/4/30||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/4/30||
|5|フォントの色が適切であること（`color`）|OK|2026/4/30||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/4/30||
|7|文章の行間が適切であること（`line-height`）|OK|2026/4/30||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/4/30||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/3||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/3||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/4/30||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/4/30||
|15|目次のスクロールスパイが適切に動作すること|OK|2026/4/30||
|16|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/4/30||
|17|ファビコンが適切に表示されていること|OK|2026/4/30||
|18|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|19|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/4/30|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|20|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/4/30||
||- iPad（768 × 1024）|OK|2026/4/30||
||- iPad Pro（834 × 1112）|OK|2026/4/30||
||- iPhone 6.7.8（375 × 667）|OK|2026/4/30||
||- iPhone XR（414 × 896）|OK|2026/4/30||
||- Laptop1（1440 × 900）|OK|2026/4/30||
||- Laptop2（1920 × 1080）|OK|2026/4/30||
|21|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/4/30||
||- Windows / Firefox|OK|2026/4/30||
||- Windows / Microsoft Edge|OK|2026/4/30||
||- Windows / Safari（Playwrightで確認）|OK|2026/4/30||
||- iOS / Chrome|OK|2026/4/30||
||- iOS / Firefox|OK|2026/4/30||
||- iOS / Safari|OK|2026/4/30||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Blogページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/4/30||
|3|横スクロールしないこと|OK|2026/4/30||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/4/30||
|5|フォントの色が適切であること（`color`）|OK|2026/4/30||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/4/30||
|7|文章の行間が適切であること（`line-height`）|OK|2026/4/30||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/4/30||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/3||
|10|ページ内外リンクが適切に動作すること|OK|2026/4/30||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/4/30||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/4/30||
|15|ページネーションが適切に動作すること|OK|2026/4/30||
|16|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/4/30||
|17|ファビコンが適切に表示されていること|OK|2026/4/30||
|18|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|19|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|||WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|20|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/4/30||
||- iPad（768 × 1024）|OK|2026/4/30||
||- iPad Pro（834 × 1112）|OK|2026/4/30||
||- iPhone 6.7.8（375 × 667）|OK|2026/4/30||
||- iPhone XR（414 × 896）|OK|2026/4/30||
||- Laptop1（1440 × 900）|OK|2026/4/30||
||- Laptop2（1920 × 1080）|OK|2026/4/30||
|21|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/4/30||
||- Windows / Firefox|OK|2026/4/30||
||- Windows / Microsoft Edge|OK|2026/4/30||
||- Windows / Safari（Playwrightで確認）|OK|2026/4/30||
||- iOS / Chrome|OK|2026/4/30||
||- iOS / Firefox|OK|2026/4/30||
||- iOS / Safari|OK|2026/4/30||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Blog詳細ページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/1||
|3|横スクロールしないこと|OK|2026/5/1||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/1||
|5|フォントの色が適切であること（`color`）|OK|2026/5/1||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/1||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/1||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/1||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/3||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/1||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/1||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/1||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/1||
|16|ファビコンが適切に表示されていること|OK|2026/5/1||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/1|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/1||
||- iPad（768 × 1024）|OK|2026/5/1||
||- iPad Pro（834 × 1112）|OK|2026/5/1||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/1||
||- iPhone XR（414 × 896）|OK|2026/5/1||
||- Laptop1（1440 × 900）|OK|2026/5/1||
||- Laptop2（1920 × 1080）|OK|2026/5/1||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/1||
||- Windows / Firefox|OK|2026/5/1||
||- Windows / Microsoft Edge|OK|2026/5/1||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/1||
||- iOS / Chrome|OK|2026/5/1||
||- iOS / Firefox|OK|2026/1/5||
||- iOS / Safari|OK|2026/1/5||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Benefitsページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/1||
|3|横スクロールしないこと|OK|2026/5/1||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/1||
|5|フォントの色が適切であること（`color`）|OK|2026/5/1||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/1||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/1||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/1||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/3||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/1||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/1||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/1||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/1||
|16|ファビコンが適切に表示されていること|OK|2026/5/1||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/1|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/1||
||- iPad（768 × 1024）|OK|2026/5/1||
||- iPad Pro（834 × 1112）|OK|2026/5/1||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/1||
||- iPhone XR（414 × 896）|OK|2026/5/1||
||- Laptop1（1440 × 900）|OK|2026/5/1||
||- Laptop2（1920 × 1080）|OK|2026/5/1||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/1||
||- Windows / Firefox|OK|2026/5/1||
||- Windows / Microsoft Edge|OK|2026/5/1||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/1||
||- iOS / Chrome|OK|2026/5/1||
||- iOS / Firefox|OK|2026/5/1||
||- iOS / Safari|OK|2026/5/1||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Careerページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/1||
|3|横スクロールしないこと|OK|2026/5/1||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/1||
|5|フォントの色が適切であること（`color`）|OK|2026/5/1||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/1||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/1||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/1||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/3||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/1||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/1||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/1||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/1||
|16|ファビコンが適切に表示されていること|OK|2026/5/1||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/1|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/1||
||- iPad（768 × 1024）|OK|2026/5/1||
||- iPad Pro（834 × 1112）|OK|2026/5/1||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/1||
||- iPhone XR（414 × 896）|OK|2026/5/1||
||- Laptop1（1440 × 900）|OK|2026/5/1||
||- Laptop2（1920 × 1080）|OK|2026/5/1||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/1||
||- Windows / Firefox|OK|2026/5/1||
||- Windows / Microsoft Edge|OK|2026/5/1||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/1||
||- iOS / Chrome|OK|2026/5/1||
||- iOS / Firefox|OK|2026/5/1||
||- iOS / Safari|OK|2026/5/1||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## FAQページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/1||
|3|横スクロールしないこと|OK|2026/5/1||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/1||
|5|フォントの色が適切であること（`color`）|OK|2026/5/1||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/3||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/1||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/1||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/3||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/1||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/1||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/1||
|15|アコーディオンが適切に動作すること|OK|2026/5/1||
|16|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/1||
|17|ファビコンが適切に表示されていること|OK|2026/5/1||
|18|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|19|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/1|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|20|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/1||
||- iPad（768 × 1024）|OK|2026/5/1||
||- iPad Pro（834 × 1112）|OK|2026/5/1||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/3||
||- iPhone XR（414 × 896）|OK|2026/5/3||
||- Laptop1（1440 × 900）|OK|2026/5/1||
||- Laptop2（1920 × 1080）|OK|2026/5/1||
|21|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/1||
||- Windows / Firefox|OK|2026/5/1||
||- Windows / Microsoft Edge|OK|2026/5/1||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/1||
||- iOS / Chrome|OK|2026/5/1||
||- iOS / Firefox|OK|2026/5/1||
||- iOS / Safari|OK|2026/5/1||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Detailsページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/1||
|3|横スクロールしないこと|OK|2026/5/1||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/1||
|5|フォントの色が適切であること（`color`）|OK|2026/5/1||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/3||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/1||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/1||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/3||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/1||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/1||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/1||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/1||
|16|ファビコンが適切に表示されていること|OK|2026/5/1||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/1|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/1||
||- iPad（768 × 1024）|OK|2026/5/1||
||- iPad Pro（834 × 1112）|OK|2026/5/1||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/3||
||- iPhone XR（414 × 896）|OK|2026/5/3||
||- Laptop1（1440 × 900）|OK|2026/5/1||
||- Laptop2（1920 × 1080）|OK|2026/5/1||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/1||
||- Windows / Firefox|OK|2026/5/1||
||- Windows / Microsoft Edge|OK|2026/5/1||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/1||
||- iOS / Chrome|OK|2026/5/1||
||- iOS / Firefox|OK|2026/5/1||
||- iOS / Safari|OK|2026/5/1||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Entryページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/1||
|3|横スクロールしないこと|OK|2026/5/1||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/1||
|5|フォントの色が適切であること（`color`）|OK|2026/5/1||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/1||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/1||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/1||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/3||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/1||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/1||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|OK|2026/5/1||
|13|フォームの入力内容が適切に送信されること|OK|2026/5/1||
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/1||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/1||
|16|ファビコンが適切に表示されていること|OK|2026/5/1||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/1|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/1||
||- iPad（768 × 1024）|OK|2026/5/1||
||- iPad Pro（834 × 1112）|OK|2026/5/1||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/1||
||- iPhone XR（414 × 896）|OK|2026/5/1||
||- Laptop1（1440 × 900）|OK|2026/5/1||
||- Laptop2（1920 × 1080）|OK|2026/5/1||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/1||
||- Windows / Firefox|OK|2026/5/1||
||- Windows / Microsoft Edge|OK|2026/5/1||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/3||
||- iOS / Chrome|OK|2026/5/3||
||- iOS / Firefox|OK|2026/5/3||
||- iOS / Safari|OK|2026/5/3||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Entry Thanksページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/1||
|3|横スクロールしないこと|OK|2026/5/1||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/1||
|5|フォントの色が適切であること（`color`）|OK|2026/5/1||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/1||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/1||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/1||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/3||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/1||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/1||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/1||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/1||
|16|ファビコンが適切に表示されていること|OK|2026/5/1||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/1|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/1||
||- iPad（768 × 1024）|OK|2026/5/1||
||- iPad Pro（834 × 1112）|OK|2026/5/1||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/1||
||- iPhone XR（414 × 896）|OK|2026/5/1||
||- Laptop1（1440 × 900）|OK|2026/5/1||
||- Laptop2（1920 × 1080）|OK|2026/5/1||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/1||
||- Windows / Firefox|OK|2026/5/1||
||- Windows / Microsoft Edge|OK|2026/5/1||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/1||
||- iOS / Chrome|OK|2026/5/1||
||- iOS / Firefox|OK|2026/5/1||
||- iOS / Safari|OK|2026/5/1||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|
