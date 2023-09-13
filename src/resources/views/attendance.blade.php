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
            <h2 class="title">
                2021-11-01
            </h2>
            <table class="table_inner">
                <tr>
                    <th>名前</th>
                    <th>勤務開始</th>
                    <th>勤務終了</th>
                    <th>休憩時間</th>
                    <th>勤務時間</th>
                </tr>
                <tr>
                    <td>テスト太郎</td>
                    <td>10:00:00</td>
                    <td>20:00:00</td>
                    <td>00:30:00</td>
                    <td>09:30:00</td>
                </tr>
                <tr>
                    <td>テスト次郎</td>
                    <td>10:00:00</td>
                    <td>20:00:00</td>
                    <td>00:30:00</td>
                    <td>09:30:00</td>
                </tr>
                <tr>
                    <td>テスト三郎</td>
                    <td>10:00:00</td>
                    <td>20:00:00</td>
                    <td>00:30:00</td>
                    <td>09:30:00</td>
                </tr>
                <tr>
                    <td>テスト四郎</td>
                    <td>10:00:00</td>
                    <td>20:00:00</td>
                    <td>00:30:00</td>
                    <td>09:30:00</td>
                </tr>
                <tr>
                    <td>テスト五郎</td>
                    <td>10:00:00</td>
                    <td>20:00:00</td>
                    <td>00:30:00</td>
                    <td>09:30:00</td>
                </tr>
            </table>
        </div>

    </main>
    <footer>
        <p class="footer_title">Atte,&nbsp;inc.</p>
    </footer>


</body>

</html>

