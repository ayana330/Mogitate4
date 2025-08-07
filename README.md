# もぎたて

## 環境構築
1. gitHubからクローン
```
git clone git@github.com:ayana330/Mogitate4.git
```
2. ディレクトリの中に移動して以下を実行
```
docker-compose up -d --build
```
3. Laravelの実装
```
composer install
php artisan key:generate
```
4. .envの更新
- DB_CONNECTION=mysql
- DB_HOST=mysql
- DB_PORT=3306
- DB_DATABASE=laravel_db
- DB_USERNAME=laravel_user
- DB_PASSWORD=laravel_pass



5. db設定コマンド
```
php atisan migrate
php artisan db:seed
```
