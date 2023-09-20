<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;
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
        // ログイン済みのユーザーIDを取得
        $userId = auth()->user()->id;
        $firstRecord = Attendance::where('user_id', $userId)->first();
        
        // 勤務開始日と現在の日付を取得
        $workStartDate = $firstRecord->date;
        $date = now()->toDateString();
        
        if ($workStartDate == $date) {
            
            // 勤務終了時刻を取得
            $workEndTime = now()->toTimeString();
            Attendance::where('user_id', $userId)
                        ->update(['work_end' => $workEndTime]);

            // firstレコードの時間を取得
            $workStartRecord = $firstRecord->work_start;
            $workEndRecord = $firstRecord->work_end;
            $workStartCalc = new Carbon($workStartRecord);
            $workEndCalc = new Carbon($workEndRecord);
            // firstレコードの差分計算
            $diffInSeconds = $workStartCalc->diffInSeconds($workEndCalc);
            // firstレコードの秒数から時間分秒を計算
            $hours = floor($diffInSeconds / 3600);
            $minutes = floor(($diffInSeconds % 3600) / 60);
            $seconds = $diffInSeconds % 60;
            $workTotal = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);

            Attendance::where('user_id', $userId)
                        ->update(['work_total' => $workTotal]);

        } else {
            Attendance::where('user_id', $userId)
                    ->where('date', $workStartDate)
                    ->update(['work_end' => "23:59:59"]);

            // firstレコードの時間を取得
            $workStartRecord = $firstRecord->work_start;
            $workEndRecord = $firstRecord->work_end;
            $workStartCalc = new Carbon($workStartRecord);
            $workEndCalc = new Carbon($workEndRecord);
            // firstレコードの差分計算
            $diffInSeconds = $workStartCalc->diffInSeconds($workEndCalc);
            // firstレコードの秒数から時間分秒を計算
            $hours = floor($diffInSeconds / 3600);
            $minutes = floor(($diffInSeconds % 3600) / 60);
            $seconds = $diffInSeconds % 60;
            $workTotal = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);

            Attendance::where('user_id', $userId)
                    ->where('date', $workStartDate)
                    ->update(['work_total' => $workTotal]);

            Attendance::create([
                'user_id' => $userId,
                'date' => $date,
                'work_start' => "00:00:00",
                'work_end' => now()->toTimeString(),
                'work_total' => now()->toTimeString()
            ]);
        
        }

        return redirect()->route('worktime_index');

    }

}
