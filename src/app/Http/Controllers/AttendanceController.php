<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use App\Models\Breaktime;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function show($date = null) 
    {
        $date = $date ? Carbon::parse($date) : Carbon::today();
        $records = Attendance::whereDate('date', $date)->paginate(5);
        $previousDate = $date->copy()->subDay();
        $nextDate = $date->copy()->addDay();

        return view('attendance', compact('records', 'date', 'previousDate', 'nextDate'));
    }
}
