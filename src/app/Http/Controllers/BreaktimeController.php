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
        $userAttendanceLatest = Attendance::where('user_id', $userId)->latest()->first();
        $breakStartTime = now()->toTimeString();
        Breaktime::create([
            'attendance_id' => $userAttendanceLatest->id,
            'break_start' => $breakStartTime,
        ]);
        return redirect()->route('worktime_index');
    }


    public function update()
    {
        $userId = auth()->user()->id;
        $userAttendance = Attendance::where('user_id', $userId)->first();
        $userAttendanceLatest = Attendance::where('user_id', $userId)->latest()->first();
        $userBreak = Breaktime::where('attendance_id', $userAttendance->id)->first();
        $userBreakLatest = Breaktime::where('attendance_id', $userAttendanceLatest->id)->latest()->first();
        $breakEndTime = now()->toTimeString();
        $date = now()->toDateString();
        $workStartDate = $userAttendanceLatest->date;

        if ($workStartDate == $date) {

            if ($userBreakLatest){
                $userBreakLatest->update(['break_end' => $breakEndTime]);
            }
                $breaktimes = Breaktime::where('attendance_id', $userAttendanceLatest->id)->get();
                $totalBreakTime_formatted = $this->breakTotal($breaktimes);
                $userAttendanceLatest -> update(['break_total' => $totalBreakTime_formatted]);
        return redirect()->route('worktime_index');

        } else {

            if ($userBreakLatest){
                $userBreakLatest->update(['break_end' => "23:59:59"]);
            }
            $breaktimes = Breaktime::where('attendance_id', $userAttendance->id)->get();
            $totalBreakTime_formatted = $this->breakTotal($breaktimes);
            $userAttendance -> update(['break_total' => $totalBreakTime_formatted]);
            $newRecord = Breaktime::create([
                'attendance_id' => $userAttendance->id,
                'break_start' => "00:00:00",
                'break_end' => now()->toTimeString()
            ]);
        }
        return redirect()->route('worktime_index');
    }

    public function breakTotal($breaktimes) {
        $totalBreakTime = 0;

        foreach ($breaktimes as $break)
        {
            $breakStart = \Carbon\Carbon::parse($break->break_start);
            $breakEnd = \Carbon\Carbon::parse($break->break_end);
            $totalBreakTime += $breakEnd -> diffInSeconds($breakStart);
        }

        $hours = floor($totalBreakTime / 3600);
        $minutes = floor(($totalBreakTime % 3600) / 60);
        $seconds = $totalBreakTime % 60;
        return sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);

    }
}


