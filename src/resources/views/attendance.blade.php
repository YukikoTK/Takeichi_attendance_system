<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
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
            @foreach($results as $result)
            <h2 class="title">
                {{ date('Y/m/d', strtotime($result->dateGroup)) }}
            </h2>
            <table class="table_inner">
                <tr>
                    <th>名前</th>
                    <th>勤務開始</th>
                    <th>勤務終了</th>
                    <th>休憩時間</th>
                    <th>勤務時間</th>
                </tr>
                @foreach($works as $work)
                <tr>
                    <td>{{ $work->user->name }}</td>
                    <td>{{ $work->work_start }}</td>
                    <td>{{ $work->work_end }}</td>
                    <td>{{ $work->break_total }}</td>
                    <td>{{ $work->work_total }}</td>
                </tr>
                @endforeach
            </table>
            @endforeach
            {{ $works->links() }}
        </div>
    </main>
    <footer>
        <p class="footer_title">Atte,&nbsp;inc.</p>
    </footer>
</body>
</html>