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
        @if ($msg != '')
        <p>こんにちは、{{$msg}}さん。</p>
        @else
        <p>何か書いて下さい。</p>
        @endif

        {{-- actionのパスはプロジェクト名/public/URL情報 --}}
        <form action="/Laravel学習用/public/hello" method="POST">
            @csrf
            <input type="text" name="msg">
            <input type="submit">
        </form>
    </body>

</html>
