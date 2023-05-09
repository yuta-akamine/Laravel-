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

        <p>&#064;forディレクティブの例</p>
        <ol>
        {{-- $iに1を代入。100になるまで繰り返し --}}
        @for ($i = 1; $i < 100; $i++)

            @if ($i % 2 == 1) {{-- 奇数の場合 --}}
                @continue {{-- 次の繰り返しへ --}}
            @elseif ($i <= 10) {{-- 奇数ではなく(偶数で)10以下の場合 --}}
                <li>No, {{$i}} {{-- 出力する --}}
            @else
                @break {{-- くり返し中断 --}}
            @endif
        @endfor
        </ol>
    </body>

</html>
