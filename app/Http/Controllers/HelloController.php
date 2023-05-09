<?php

namespace App\Http\Controllers;//名前空間。コントローラクラスを作成する際の基本設定

use Illuminate\Http\Request;//Requestクラスの読み込み
use Illuminate\Http\Response;//Responseクラスの読み込み

class HelloController extends Controller {
    //アクションとして使われるメソッド
    //helloにアクセスした際のリクエストがgetメソッドの場合のアクション
    public function index() {
        //配列$dataを定義
        $data = ['one', 'two', 'three', 'four', 'five'];
        //連想配列のキーをdata値を配列$dataとしてviewへ渡す
        return view('hello.index', ['data'=>$data]);
    }

    //helloにアクセスした際のフォームがpostだった場合の処理
    public function post(Request $request) {//引数にRequestインスタンスを準備
        // msgのキーの値はRequestインスタンスのmsgフィールドの値
        return view('hello.index', ['msg'=>$request->msg]);
    }

}
