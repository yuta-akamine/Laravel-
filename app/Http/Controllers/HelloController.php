<?php

namespace App\Http\Controllers;//名前空間。コントローラクラスを作成する際の基本設定

use Illuminate\Http\Request;//Requestクラスの読み込み
use Illuminate\Http\Response;//Responseクラスの読み込み

class HelloController extends Controller {
    //アクションとして使われるメソッド
    public function index(Request $request, Response $response) {//引数にRequestとResponseのインスタンスを用意

        $html = <<<EOF

        <html>

        <head>

            <title>Hello/Index</title>

            <style>

                body {font-size:16pt; color:#999; }
                h1 {font-size:120pt; text-align:right; color:#fafafa; margin:-50px 0px -120px 0px;}

            </style>

        </head>

        <body>

            <h1>Hello</h1>
            <h3>Request</h3>
            <pre>{$request}</pre> <!-- 変数展開 半角スペース・改行などがそのまま表示  -->
            <h3>Response</h3>
            <pre>{$response}</pre> <!-- を変数展開 半角スペース・改行などがそのまま表示 -->

        </body>

        </html>
        EOF;

            $response->setContent($html);//$responseにsetContentメソッドを利用して$htmlを代入
            return $response;

    }

}
