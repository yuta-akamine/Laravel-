<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServicdeProvider extends ServiceProvider { //ServiceProviderを継承

    /**
     * Bootstrap services.
     * アプリケーションサービスへのブートストラップ処理(アプリケーションが起動する際に割り込んで実行される処理)
     */
    public function boot() {
        View::composer (
            // /helloのindexビュー(index.blade.phpテンプレートによるビュー)にview_messageという値を設定する処理
            'hello.index', function($view) {
                $view->with('view_message', 'composer message!');
            }
        );
    }

}
