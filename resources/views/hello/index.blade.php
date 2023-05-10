<html>

    <head>
        <title>Hello/Index</title>
        <style>
            body {font-size: 16pt; color: #999; }
            h1 { font-size: 50pt; text-align: right; color: #f6f6f6;
                marginq:-20px 0px -30px 0px; letter-spacing:-4pt; }
        </style>
    </head>

    <body>
        <h1>Blade/Index</h1>
        {{-- @の実体参照文字 --}}
        <p>&#064;forディレクティブの例</p>
        <ol>
        {{-- 配列dataをitemに代入 --}}
        @foreach ($data as $item)
            {{-- 最初の繰り返しの場合 --}}
            @if ($loop->first)
                {{-- 画面へ出力 --}}
                <p>※データ一覧</p>
                <ul>
            @endif
                    {{-- No.現在の繰り返し回数.配列の0番目の要素 --}}
                    <li>No,{{$loop->iteration}}. {{$item}}</li>
                    {{-- 最後の繰り返しの場合 --}}
            @if ($loop->last)
                </ul><p>--ここまで</p>
            @endif
        @endforeach
        </ol>
    </body>

</html>
