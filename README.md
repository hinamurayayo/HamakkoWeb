# HamakkoWeb
WEB系やらゲーム制作やら身内で練習するためのリポジトリ<br>
現在の本番環境↓<br>
https://hinapanda.com/<br>



# 目的
1. PHPを習得する(綺麗なコードを書けるようになること)
2. DB(データベース)/SQLを理解する
3. WEBシステムの構成・仕組みを理解する
4. Githubを使いこなすこと
5. チーム開発をやり遂げること
6. これらを達成して気持ちよくなること
<br>

# 作るもの
* WEBブログ(仮)
<br>

# 環境
## フロントエンド側
* 未定(bootstrap/vue.jsあたり?)
## バックエンド側
* PhyServer:AWS or VPS(検討中)
* OS:CentOS(暫定)
* WebServer:Laravel 6.*
* Framework:Laravel 6.*
* 言語:Laravel 6.\*(PHP7.4.\*)
* DB:MySQL
<br>

# コーディング禁止事項
## 静的ファイルを絶対パスでソース内に記述しない
CSSファイルやJavaScriptファイルなど静的ファイルは必ず相対パスで記述してください。<br>
静的コンテンツの配置場所が変わった際に大改修が発生してしまいます。
現在の静的コンテンツ置き場（ドキュメントルート）は、
「(アプリケーションルートwebapp)\public\static」です。

<br>


# 条件
## 「PHPプログラマーとして初めて仕事ができるかどうかを見定める方法」から引用
>* 'LAMP構成'とする
>* デザインには'Bootstrap'を用いること
>* 記事にはコメント欄があり、自由にコメントをぶら下げられること
>* 管理者用画面を作りログインできること
>* PHPのセッション機能を使いログイン状態を保持したまま記事の追加・編集が出来ること
>* 記事の本文は'Markdown'で書けること
>* 'SQLインジェクション'や'XSS脆弱性'を作らないこと
>* フレームワークのCLIコマンドによるコントローラやモデル生成に頼っても良いが、'ソースコードのコピペはしてはならない'</br>
>
>この一見しょぼい当たり前に思えるブログ、これにPHPでのWeb開発に於ける全ての要素が詰まっています。
>複数人で記事を書けるように修正すればSNSですし、
>簡略化して全ての人がコメントを気軽に呟けるようにすればTwitterになります。
>
>これをGitHubに固めてポートフィリオとして提出すれば、
>年齢にも寄りますがほぼ即戦力として何処にでもいけるでしょう。
