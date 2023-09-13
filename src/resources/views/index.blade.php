<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>


<body>
    <header class="header">
        <h1 class="header_top">
            <a href="/">Atte</a>
        </h1>
        <nav class="nav_contents">
            <ul>
                <li><a href="/">ホーム</a></li>
                <li><a href="/attendance">日付一覧</a></li>
                <li>
                    <form action="{{ route('logout')}}"  method="POST">
                        @csrf
                        <button class="btn_logout">ログアウト</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="main_content">
            <h2 class="title">
                {{ $username }}さんお疲れ様です！
            </h2>
            <div class="box">
                <div class="box_upper">
                    <form action="{{ route('worktime_start')}}" method="POST" class="form1">
                        @csrf
                        <div class="box1">
                            <button class="box_inner" type="submit">勤務開始</button>
                        </div>
                    </form>
                    <form action="{{ route('worktime_end')}}" method="POST" class="form2">
                        @method('PATCH')
                        @csrf
                        <div class="box2">
                            <button class="box_inner" type="submit">勤務終了</button>
                        </div>
                    </form>
                </div>
                <div class="box_lower">
                    <form action="{{ route('breaktime_start')}}" method="POST" class="form3">
                        @csrf
                        <div class="box3">
                            <button class="box_inner" type="submit" name="break_start_btn">休憩開始</button>
                        </div>
                    </form>
                    <form action="{{ route('breaktime_end')}}" method="POST" class="form4">
                        @method('PATCH')
                        @csrf
                        <div class="box4">
                            <button class="box_inner" type="submit" name="break_end_btn">休憩終了</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p class="footer_title">Atte,&nbsp;inc.</p>
    </footer>


</body>
</html>