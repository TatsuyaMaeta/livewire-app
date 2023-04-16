‘|’|”|”

// プロジェクト作成 
composer create-project "laravel/laravel=9.*" livewire-app

// 作成したプロジェクトへ移動
cd livewire-app

// jetstreamパッケージのダウンロード
composer require laravel/jetstream

// Laravelのバージョン確認
php artisan --version

// インストールしたライブラリのバージョン確認
composer show laravel/jetstream

このコマンドで確認したら、コンフリクトverの表記あった
composer show --all laravel/framework

// Install Jetstream With Livewire
php artisan jetstream:install livewire

```
npm install
```



https://tanden.dev/%E3%82%88%E3%81%8F%E4%BD%BF%E3%81%86composer%E3%82%B3%E3%83%9E%E3%83%B3%E3%83%89%E3%81%A8%E3%83%90%E3%83%BC%E3%82%B8%E3%83%A7%E3%83%B3%E6%8C%87%E5%AE%9A%E3%81%AE%E5%82%99%E5%BF%98%E9%8C%B2/
composer require laravel/jetstream:"2.9.0"

https://packagist.org/packages/laravel/jetstream#v2.9.0



storageからimageを引っ張ってきて表示させるにはシンボリックリンクが必要
```
php artisan storage:link
```
