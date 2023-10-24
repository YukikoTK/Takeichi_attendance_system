@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="main_content">
    <h2 class="title">
        {{ $username }}さんお疲れ様です！
    </h2>
    <div class="box">
        <div class="box_upper">
            <form action="{{ route('worktime_start')}}" method="POST" class="form1">
                @csrf
                <div class="box1" onclick="document.querySelector('.form1').submit();">
                    <button class="box_inner" type="submit">勤務開始</button>
                </div>
            </form>
            <form action="{{ route('worktime_end')}}" method="POST" class="form2">
                @method('PATCH')
                @csrf
                <div class="box2" onclick="document.querySelector('.form2').submit();">
                    <button class="box_inner" type="submit">勤務終了</button>
                </div>
            </form>
        </div>
        <div class="box_lower">
            <form action="{{ route('breaktime_start')}}" method="POST" class="form3">
                @csrf
                <div class="box3" onclick="document.querySelector('.form3').submit();">
                    <button class="box_inner" type="submit" name="break_start_btn">休憩開始</button>
                </div>
            </form>
            <form action="{{ route('breaktime_end')}}" method="POST" class="form4">
                @method('PATCH')
                @csrf
                <div class="box4" onclick="document.querySelector('.form4').submit();">
                    <button class="box_inner" type="submit" name="break_end_btn">休憩終了</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
