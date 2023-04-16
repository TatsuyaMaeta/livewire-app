‘|’|”|”|″|“

### Laravel9 LivewireでCRUD登録・表示・更新・削除・検索・画像アップロード・プレビュー・バリデーションtutrial
URL : https://youtu.be/dj0UfTkSQbE

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

x-jet-dialog-modalタグ内の情報はvendor > jetstream > components > dialog-modal.blade.phpの内容に影響される。 <br>
dialog-modal.blade.php内では
```php
    <div class="px-6 py-4">
        <div class="text-lg">
            {{ $title }}
        </div>

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
        {{ $footer }}
    </div>
```
と言った構造になっており、3つのcontentが入ってくる設計になっている。
それに従って渡す情報は

```php
        <x-slot name="title">
            ~略~
        </x-slot>
        <x-slot name="content">
            ~略~
        </x-slot>
        <x-slot name="footer">
            ~略~
        </x-slot>
```
となっていないといけない。
渡されてくるはずのx-slot footerがないせいでエラーだった

