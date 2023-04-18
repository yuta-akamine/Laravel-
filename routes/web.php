<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

$html = <<<EOF
<html>
    <head>
        <title>hello</title>
        <style>
            body {font-size: 16pt; color: #999;}
            h1 {font-size: 100px; text-align: right; color: #eee; margin: -40px 0px -50px 0px;}
        </style>
    </head>
    <body>
        <h1>hello</h1>
        <p>This is sample page.</p>
        <p>これは、サンプルで作ったページです。</p>
    </body>
</html>
EOF;

Route::get('hello', function () use ($html) {
    return $html;
});
