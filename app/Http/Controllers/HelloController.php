<?php

namespace App\Http\Controllers;//名前空間。コントローラクラスを作成する際の基本設定

use Illuminate\Http\Request;

class HelloController extends Controller {
    //アクションとして使われるメソッド
    public function __invoke() {//引数にデフォルト値を代入

        return <<<EOF

    <html>

    <head>

        <title>Hello</title>

        <style>

            body {font-size:16pt; color:#999; }
            h1 {font-size:30pt; text-align:right; color:#eee; margin:-15px 0px 0px 0px;}

        </style>

    </head>

    <body>

        <h1>Single Action</h1>
        <p>これは、シングルアクションコントローラのアクションです。</p>

    </body>

    </html>
    EOF;

    }

}
