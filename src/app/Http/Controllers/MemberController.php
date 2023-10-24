<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;
use App\Models\Breaktime;
use App\Models\User;

class MemberController extends Controller
{
    public function index() {
        $members = User::paginate(5);
        return view('member', compact('members'));
    }
    
    public function show($name = null) {
        $member = $name ? User::where('name', $name)->first() : Auth::user();

        $memberId = $member->id;
        $attendanceRecords = Attendance::where('user_id', $memberId)->paginate(5);

        return view('personal', compact('member', 'attendanceRecords'));
    }
}

