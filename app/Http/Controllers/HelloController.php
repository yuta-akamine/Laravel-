<?php

namespace App\Http\Controllers;//名前空間。コントローラクラスを作成する際の基本設定

use Illuminate\Http\Request;

class HelloController extends Controller {
    //アクションとして使われるメソッド
    public function index($id='noname', $pass='unknown') {//引数にデフォルト値を代入

        return <<<EOF
<html>
    <head>
        <title>Hello/Index</title>
        <style>
        body {font-size:16px; color:#999; }
        h1 { font-size:100pt; text-align:right; color:#eee;
            margin:-40px 0px -50px 0px; }
        </style>
    </head>
    <body>
        <h1>Index</h1>
        <p>これは、Helloコントローラのindexアクションです。</p>
        <ul>
            <li>ID: {$id}</li>
            <li>PASS: {$pass}</li>
        </ul>
    </body>
</html>
EOF;

    }
}
