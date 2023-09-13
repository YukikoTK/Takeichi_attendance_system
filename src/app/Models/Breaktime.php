<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breaktime extends Model
{
    use HasFactory;

    protected $fillable = [
        'attendance_id',
        'break_start',
        'break_end',
    ];

    // attendanceテーブルとのリレーションを構築
     public function attendance()
     {
        return $this->belongsTo(Attendance::class);
     }

}
