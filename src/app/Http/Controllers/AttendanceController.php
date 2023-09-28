<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use App\Models\Breaktime;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index()
    {
        $works = Attendance::with('user')->paginate(5);
        $this->attendances = new Attendance();
        $results = $this->attendances->getDate();
        return view('attendance', [
            "works" => $works,
            "results" => $results
        ]);


    }
    
}
