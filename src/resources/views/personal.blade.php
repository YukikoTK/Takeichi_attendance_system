@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
@endsection

@section('content')
<div class="main_content">
    <h2 class="title">
        {{ $member->name }}さん
    </h2>
    <table class="table_inner">
        <tr>
            <th>勤務日</th>
            <th>勤務開始</th>
            <th>勤務終了</th>
            <th>休憩時間</th>
            <th>勤務時間</th>
        </tr>
        @foreach($attendanceRecords as $attendanceRecord)
        <tr>
            <td>{{ $attendanceRecord->date }}</td>
            <td>{{ $attendanceRecord->work_start }}</td>
            <td>{{ $attendanceRecord->work_end }}</td>
            <td>{{ $attendanceRecord->break_total }}</td>
            <td>{{ $attendanceRecord->work_total }}</td>
        </tr>
        @endforeach
    </table>
    {{ $attendanceRecords->links() }}
</div>
@endsection