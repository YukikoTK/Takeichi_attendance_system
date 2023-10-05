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
                <li class="header_list"><a href="/">ホーム</a></li>
                <li class="header_list"><a href="/attendance">日付一覧</a></li>
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
        <div class="main_content">
            <h2 class="title">
                <a class="date_link data_link-pre" href="{{ route('attendance_show', $previousDate->format('Y-m-d')) }}"><</a>
                {{ $date->format('Y-m-d') }}
                <a class="date_link data_link-next" href="{{ route('attendance_show', $nextDate->format('Y-m-d')) }}">></a>
            </h2>
            <table class="table_inner">
                <tr>
                    <th>名前</th>
                    <th>勤務開始</th>
                    <th>勤務終了</th>
                    <th>休憩時間</th>
                    <th>勤務時間</th>
                </tr>
                @foreach($records as $record)
                <tr>
                    <td>{{ $record->user->name }}</td>
                    <td>{{ $record->work_start }}</td>
                    <td>{{ $record->work_end }}</td>
                    <td>{{ $record->break_total }}</td>
                    <td>{{ $record->work_total }}</td>
                </tr>
                @endforeach
            </table>
            {{ $records->links() }}
        </div>
    </main>
    <footer>
        <p class="footer_title">Atte,&nbsp;inc.</p>
    </footer>
</body>
</html>