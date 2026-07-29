## 概要

COACHTECH 教材 Tutorial 9-3「データベース操作ハンズオン演習」で作成した成果物です。
（**商品管理システムの商品一覧機能の実装**）

## 使用技術

- PHP 8.x
- Laravel 10.x
- MySQL
- マイグレーション、シーダー

## 学んだこと

- マイグレーションでテーブルを定義する
- シーダーでダミーデータを投入する方法
- クエリビルダで一覧データを取得する方法

## 動作確認方法

他の環境で本アプリケーションを起動し、動作確認を行う手順は以下の通りです。

### 1. 事前準備

- PHP (バージョン8.x以上)
- Composer
- MySQL などのデータベース環境

### 2. セットアップ手順

1.  リポジトリをクローンします。
    ```bash
    git clone [https://github.com/kyomiya0220/database-app-practice.git](https://github.com/kyomiya0220/database-app-practice.git)
    cd database-app-practice
    ```
2.  依存パッケージをインストールします。

````bash
    composer install
```

3.  環境設定ファイルを作成し、データベース等の接続情報を設定します。

```bash
cp .env.example .env
php artisan key:generate
```

4. データベースのマイグレーション（テーブル作成）を実行します。

```Bash
php artisan migrate
```
### 3. アプリケーションの起動

1. ローカルサーバーを起動します。

```Bash
php artisan serve
```

2. ブラウザで http://127.0.0.1:8000 にアクセスし、動作を確認してください。

````

```

```
