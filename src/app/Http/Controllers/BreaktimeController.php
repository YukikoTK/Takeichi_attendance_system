<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Breaktime;
use App\Models\Attendance;
use Carbon\Carbon;

class BreaktimeController extends Controller
{
    public function store()
    {
        $userId = auth()->user()->id;
        $userAttendance = Attendance::where('user_id', $userId)->first();
        $breakStartTime = now()->toTimeString();

            Breaktime::create([
                'attendance_id' => $userAttendance->id,
                'break_start' => $breakStartTime,
            ]);



        return redirect()->route('worktime_index');
    }


    public function update()
    {

    // ログイン済みユーザーのID
        $userId = auth()->user()->id;
    // Attendanceモデルのuser_idとログイン済みユーザーIDが等しい最初のレコード
        $userAttendance = Attendance::where('user_id', $userId)->first();
    // Breaktimeモデルのattendance_idとAttenadnceモデルのidが等しい最初のレコード
        $userBreak = Breaktime::where('attendance_id', $userAttendance->id)->first();
    // Breaktimeモデルのattendance_idとAttenadnceモデルのidが等しい最新のレコード
        $userBreakLatest = Breaktime::where('attendance_id', $userAttendance->id)->latest()->first();

        $breakEndTime = now()->toTimeString();
        $date = now()->toDateString();
        $workStartDate = $userAttendance->date;


        if ($workStartDate == $date) {
            Breaktime::where('id', $userBreakLatest->id)
            // Breaktime::where('attendance_id', $userAttendance->id)
            ->update(['break_end' => $breakEndTime]);
            
            
        } else {
            Breaktime::where('id', $userBreakLatest->id)
            // Breaktime::where('attendance_id', $userAttendance->id)
            ->update(['break_end' => "23:59:59"]);
            
            $newRecord = Breaktime::create([
                'attendance_id' => $userAttendance->id,
                'break_start' => "00:00:00",
                'break_end' => now()->toTimeString()
            ]);

        }

        $breaktimes = Breaktime::where('attendance_id', $userAttendance->id)->get();

        $totalBreakTime = 0;

        foreach ($breaktimes as $break) 
        {
        // $break はこのループ内で各 Breaktime レコードを表す
        $breakStart = \Carbon\Carbon::parse($break->break_start);
        $breakEnd = \Carbon\Carbon::parse($break->break_end);
        $totalBreakTime += $breakEnd -> diffInSeconds($breakStart);
        }

        //秒を時分秒に変換
        $hours = floor($totalBreakTime / 3600);
        $minutes = floor(($totalBreakTime % 3600) / 60);
        $seconds = $totalBreakTime % 60;
        $totalBreakTime_formatted = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);

        $userAttendance -> update(['break_total' => $totalBreakTime_formatted]);
        
    
        return redirect()->route('worktime_index');
    }

}

