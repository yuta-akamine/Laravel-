<?php

namespace App\Http\Controllers;//名前空間。コントローラクラスを作成する際の基本設定

use Illuminate\Http\Request;//Requestクラスの読み込み
use Illuminate\Http\Response;//Responseクラスの読み込み

class HelloController extends Controller {
    //アクションとして使われるメソッド
    public function index() {
        return view('hello.index');
    }

}
