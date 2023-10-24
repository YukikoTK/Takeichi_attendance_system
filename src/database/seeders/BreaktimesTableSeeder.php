<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Attendance;
use App\Models\Breaktime;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class BreaktimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breaktimes')->delete();
        Breaktime::create([
            'attendance_id' => 1,
            'break_start' => '11:00:00',
            'break_end' => '12:00:00',
            'created_at' => '2023-10-23 11:00:00',
            'updated_at' => '2023-10-23 12:00:00',
        ]);
        Breaktime::create([
            'attendance_id' => 2,
            'break_start' => '18:00:00',
            'break_end' => '19:00:00',
            'created_at' => '2023-10-23 18:00:00',
            'updated_at' => '2023-10-23 19:00:00',
        ]);
        Breaktime::create([
            'attendance_id' => 3,
            'break_start' => '18:00:00',
            'break_end' => '19:00:00',
            'created_at' => '2023-10-24 18:00:00',
            'updated_at' => '2023-10-24 19:00:00',
        ]);
        Breaktime::create([
            'attendance_id' => 4,
            'break_start' => '11:00:00',
            'break_end' => '11:30:00',
            'created_at' => '2023-10-24 11:00:00',
            'updated_at' => '2023-10-24 11:30:00',
        ]);
        Breaktime::create([
            'attendance_id' => 5,
            'break_start' => '13:00:00',
            'break_end' => '14:00:00',
            'created_at' => '2023-10-24 13:00:00',
            'updated_at' => '2023-10-24 14:00:00',
        ]);
        Breaktime::create([
            'attendance_id' => 6,
            'break_start' => '18:00:00',
            'break_end' => '19:00:00',
            'created_at' => '2023-10-24 18:00:00',
            'updated_at' => '2023-10-24 19:00:00',
        ]);
        Breaktime::create([
            'attendance_id' => 7,
            'break_start' => '12:00:00',
            'break_end' => '12:30:00',
            'created_at' => '2023-10-24 12:00:00',
            'updated_at' => '2023-10-24 12:30:00',
        ]);
        Breaktime::create([
            'attendance_id' => 8,
            'break_start' => '18:00:00',
            'break_end' => '19:00:00',
            'created_at' => '2023-10-24 18:00:00',
            'updated_at' => '2023-10-24 19:00:00',
        ]);
        Breaktime::create([
            'attendance_id' => 9,
            'break_start' => '12:00:00',
            'break_end' => '13:00:00',
            'created_at' => '2023-10-24 12:00:00',
            'updated_at' => '2023-10-24 13:00:00',
        ]);
        Breaktime::create([
            'attendance_id' => 10,
            'break_start' => '10:00:00',
            'break_end' => '10:30:00',
            'created_at' => '2023-10-25 10:00:00',
            'updated_at' => '2023-10-25 10:30:00',
        ]);
        Breaktime::create([
            'attendance_id' => 11,
            'break_start' => '18:00:00',
            'break_end' => '19:00:00',
            'created_at' => '2023-10-25 18:00:00',
            'updated_at' => '2023-10-25 19:00:00',
        ]);
    }
}
