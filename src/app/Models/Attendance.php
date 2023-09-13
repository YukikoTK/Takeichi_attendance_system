<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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


}
