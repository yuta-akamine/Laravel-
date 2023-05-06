<?php

namespace App\Http\Controllers;//名前空間。コントローラクラスを作成する際の基本設定

use Illuminate\Http\Request;//Requestクラスの読み込み
use Illuminate\Http\Response;//Responseクラスの読み込み

class HelloController extends Controller {
    //アクションとして使われるメソッド
    public function index() {
        return view('hello.index', ['msg'=>'']);
    }

    //helloにアクセスした際のフォームがpostだった場合の処理
    public function post(Request $request) {//引数にRequestインスタンスを準備
        // Requestインスタンスのmsgフィールドの値を変数$msgへ代入
        return view('hello.index', ['msg'=>$request->msg]);
    }

}
