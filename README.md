# アプリケーション名
Atte

## 概要説明（どんなアプリか）
ユーザーの勤務時間や休憩時間を管理できる勤怠管理システム

## 作成した目的
ユーザーの勤怠を管理するため

## 機能一覧
- 会員登録機能
- メール認証機能
- ログイン機能
- ログアウト機能
- 勤怠登録機能

## 使用技術（実行環境）
- laravel8
- Breeze
- [MailHog](http://localhost:8025/)

## テーブル設計

## ER図

## 環境構築
ダミーデータを9件登録しております。下記手順にてご確認願います。
1, 開発環境を[Github]()よりクローン
2, ダミーデータ作成のために下記のコマンドを実行
php artisan migrate:fresh --seed
3, localhost/loginにアクセスし、下記のデータを使用してログイン
メールアドレス : taro@test.com
パスワード : password

## その他
認証メール送信のために、MailHogを使用しています。
必要でしたら、.envファイルを下記の通り書き換えてください。
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_ADDRESS=test@test.com
