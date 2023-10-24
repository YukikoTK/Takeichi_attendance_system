<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <h1 class="header_top">
            <a href="/">Atte</a>
        </h1>
        <nav class="nav_contents">
            <ul>
                <li class="header_list"><a href="/">ホーム</a></li>
                <li class="header_list"><a href="/attendance">日付一覧</a></li>
                <li class="header_list"><a href="/member">ユーザー一覧</a></li>
                <li class="header_list"><a href="/member/personal">個別ページ</a></li>
                <li class="header_list">
                    <form action="{{ route('logout')}}"  method="POST">
                        @csrf
                        <button class="btn_logout">ログアウト</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p class="footer_title">Atte,&nbsp;inc.</p>
    </footer>
</body>
</html>