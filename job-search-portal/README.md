# README.md

# Job Search Portal

このプロジェクトは、求人情報を検索・表示するためのポータルサイトのプロトタイプです。ユーザーは、案件一覧を閲覧し、詳細情報を確認することができます。

## 機能

- 案件一覧表示
- ページネーション（1ページあたり10件表示）
- 案件詳細表示（新しいページまたはポップアップで表示）

## ファイル構成

```
job-search-portal
├── src
│   ├── config
│   │   └── database.php       // データベース接続設定
│   ├── models
│   │   └── Job.php            // Jobクラスの定義
│   ├── public
│   │   ├── css
│   │   │   └── style.css       // アプリケーションのCSSスタイル
│   │   ├── js
│   │   │   └── main.js         // ユーザーインタラクション用のJavaScript
│   │   ├── index.php           // アプリケーションのエントリーポイント
│   │   ├── list.php            // 案件一覧表示
│   │   └── detail.php          // 案件詳細表示
│   ├── includes
│   │   ├── header.php          // ヘッダーセクション
│   │   └── footer.php          // フッターセクション
│   └── utils
│       └── Pagination.php      // ページネーションロジック
├── composer.json               // Composerの設定ファイル
└── README.md                   // プロジェクトのドキュメント
```

## セットアップ

1. リポジトリをクローンします。
   ```
   git clone <repository-url>
   ```

2. Composerを使用して依存関係をインストールします。
   ```
   composer install
   ```

3. データベース接続設定を`src/config/database.php`で行います。

4. ウェブサーバーを起動し、`src/public/index.php`にアクセスします。

## 使用方法

- 案件一覧ページにアクセスすると、最新の求人情報が表示されます。
- 各案件をクリックすると、詳細情報が表示されます。