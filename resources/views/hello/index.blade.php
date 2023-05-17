{{-- views/layouts/helloapp(親)レイアウトの継承 --}}
@extends('layouts.helloapp')

{{-- 第一引数にセクションの名前、第二引数に表示させる値 --}}
@section('title', 'Index')

{{-- menubarというセクション --}}
@section('menubar')
    {{-- 親のセクションを表示 --}}
    @parent
    {{-- 親のセクション表示後下記を表示 --}}
    インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツです。</p>
<ul>
    {{-- @eachを利用して$dataをitemに入れ替えて繰り返し --}}
    @each('components.item', $data, 'item')
</ul>

@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
