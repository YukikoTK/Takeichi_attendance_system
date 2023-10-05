<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'work_start',
        'work_end',
        'work_total',
        'break_total',
    ];
    
    // protected $guarded = array(id);


    // 打刻ページにログイン名を表示
    public function getTitle(){
        return 'name'.$this->name;
    }


    // usersテーブルとのリレーションを構築
     public function user()
     {
        return $this->belongsTo(User::class);
     }

    // breaksテーブルとのリレーションを構築
     public function breaks(){
        return $this->hasMany(Breaktime::class);
    }

    // 日付のグループ化
    // public function getDate()
    // {
    //     return DB::table('attendances')
    //           ->selectRaw('DATE_FORMAT(date, "%Y%m%d") AS dateGroup')
    //           ->groupBy('dateGroup')
    //           ->get();
    // }
}
