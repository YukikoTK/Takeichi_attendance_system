<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;
use App\Models\Breaktime;
use Carbon\Carbon;


class WorktimeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('index', ['username' => $user->name]);
    }


    public function store()
    {
        $userId = Auth::id();
        $date = now()->toDateString();
        $workStartTime = now()->toTimeString();

            Attendance::create([
                'user_id' => $userId,
                'date' => $date,
                'work_start' => $workStartTime,
            ]);

        return redirect()->route('worktime_index');
    }

    
    
    public function update()
    {
        $userId = auth()->user()->id;
        $latestRecord = Attendance::where('user_id', $userId)->latest()->first();
        $workStartDate = $latestRecord->date;
        $date = now()->toDateString();

        if ($workStartDate == $date) {
            $workEndTime = now()->toTimeString();
            $latestRecord->update(['work_end' => $workEndTime]);

            $workStartRecord = $latestRecord->work_start;
            $workEndRecord = $latestRecord->work_end;
            $workTotal = $this->workTotal($workStartRecord, $workEndRecord);
            $latestRecord->update(['work_total' => $workTotal]);

        } else {
            Attendance::where('user_id', $userId)
                    ->where('date', $workStartDate)
                    ->update(['work_end' => "23:59:59"]);

            $workStartRecord = $latestRecord->work_start;
            $workEndRecord = "23:59:59";
            $workTotal = $this->workTotal($workStartRecord, $workEndRecord);

            Attendance::where('user_id', $userId)
                    ->where('date', $workStartDate)
                    ->update(['work_total' => $workTotal]);
            $newAttendance = Attendance::create([
                'user_id' => $userId,
                'date' => $date,
                'work_start' => "00:00:00",
                'work_end' => now()->toTimeString(),
                'work_total' => now()->toTimeString()
            ]);

            // $newAttendance->save();
            // $newAttendanceId = $newAttendance->id;
            // $lastAttendance = Attendance::latest()->first();
            // $lastAttendanceId = $lastAttendance->id;

            // Breaktime::where('attendance_id', $lastAttendanceId)
            // ->update(['attendance_id' => $newAttendanceId]);
           }


        return redirect()->route('worktime_index');
        
    }
        


    public function workTotal($workStartRecord, $workEndRecord) {
            $workStartCalc = new Carbon($workStartRecord);
            $workEndCalc = new Carbon($workEndRecord);
            $diffInSeconds = $workStartCalc->diffInSeconds($workEndCalc);
            $hours = floor($diffInSeconds / 3600);
            $minutes = floor(($diffInSeconds % 3600) / 60);
            $seconds = $diffInSeconds % 60;
            return sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
    }

}