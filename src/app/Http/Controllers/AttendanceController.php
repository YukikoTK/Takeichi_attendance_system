<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use App\Models\Breaktime;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function show($date = null) {
        if ($date) {
            // パラメータが存在する場合、指定された日付のデータを取得
            $date = Carbon::parse($date);
            $records = Attendance::whereDate('date', $date)->paginate(5);
        } else {
            // パラメータが存在しない場合、ログイン日のデータを取得
            $date = Carbon::today();
            $records = Attendance::whereDate('date', $date)->paginate(5);
        }
        
        $previousDate = $date->copy()->subDay();
        $nextDate = $date->copy()->addDay();

        return view('attendance', compact('records', 'date', 'previousDate', 'nextDate'));
    }
}
