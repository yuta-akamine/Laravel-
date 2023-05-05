<?php

namespace App\Http\Controllers;//名前空間。コントローラクラスを作成する際の基本設定

use Illuminate\Http\Request;//Requestクラスの読み込み
use Illuminate\Http\Response;//Responseクラスの読み込み

class HelloController extends Controller {
    //アクションとして使われるメソッド
    public function index() {
        //連想配列 キー名『msg』に値『お名前を入力して下さい。』をセット
        $data = [
            'msg'=>'お名前を入力して下さい。',
        ];
        //viewのindex.bladeへ連想配列$dataを渡す
        return view('hello.index', $data);
    }

    //helloにアクセスした際のフォームがpostだった場合の処理
    public function post(Request $request) {//引数にRequestインスタンスを準備
        // Requestインスタンスのmsgフィールドの値を変数$msgへ代入
        $msg = $request->msg;
        //連想配列 キー名『msg』に値『'こんにちは、' . $msg . 'さん！'』をセット
        $data = [
            'msg'=>'こんにちは、' . $msg . 'さん！',
        ];
        return view('hello.index', $data);
    }

}
