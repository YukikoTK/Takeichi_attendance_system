@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
@endsection

@section('content')
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
@endsection