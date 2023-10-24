@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
@endsection

@section('content')
<div class="main_content">
    <h2 class="title">
        ユーザー一覧
    </h2>
    <table class="table_inner">
        <tr>
            <th>ID</th>
            <th>名前</th>
        </tr>
        @foreach($members as $member)
        <tr>
            <td>{{ $member->id }}</td>
            <td>
                <a href="{{ route('member_personal', ['name' => $member->name]) }}">
                    {{ $member->name }}
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $members->links() }}
</div>
@endsection