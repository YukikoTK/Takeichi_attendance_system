<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Breaktime;
use App\Models\Attendance;

class BreaktimeController extends Controller
{
    public function store()
    {
        $userAttendance = Attendance::where('user_id', Auth::user()->id)->first();
        $breakStartTime = now()->toTimeString();
        
            Breaktime::create([
                'attendance_id' => $userAttendance->id,
                'break_start' => $breakStartTime,
            ]);
            
        return redirect()->route('worktime_index');
    }
    

    public function update()
    {
        $userAttendance = Attendance::where('user_id', Auth::user()->id)->first();
        $breakEndTime = now()->toTimeString();
    
        Breaktime::where('attendance_id', $userAttendance)
                  ->update(['break_end' => $breakEndTime]);
    
        return redirect()->route('worktime_index');
    }


    // public function store()
    // {
    //     $userAttendance = Attendance::where('user_id', Auth::user()->id)->first();
    //     $breakStartTime = now()->toTimeString();
    //     $breakEndTime = now()->toTimeString();

    //     if (isset($_POST['break_start_btn'])) {
    //         Breaktime::create([
    //             'attendance_id' => $userAttendance->id,
    //             'break_start' => $breakStartTime,
    //         ]);
    //     }elseif (isset($_POST['break_end_btn'])) {
    //         Breaktime::where('attendance_id', $userAttendance)
    //         ->update(['break_end' => $breakEndTime]);
    //     }

    //     return redirect()->route('worktime_index');
    // }

}

