<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
use App\Models\Attendance;


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
        $userId = Auth::id();
        $date = now()->toDateString();
        $workEndTime = now()->toTimeString();

        Attendance::where('user_id', $userId)
                  ->where('date', $date)
                  ->update(['work_end' => $workEndTime]);

        return redirect()->route('worktime_index');
    }

}
