<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Attendance;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendances')->delete();
        Attendance::create([
            'user_id' => 1,
            'date' => '2023-10-23',
            'work_start' => '09:00:00',
            'work_end' => '17:00:00',
            'work_total' => '08:00:00',
            'break_total' => '01:00:00',
            'created_at' => '2023-10-23 09:00:00',
            'updated_at' => '2023-10-23 17:00:00',
        ]);
        Attendance::create([
            'user_id' => 2,
            'date' => '2023-10-23',
            'work_start' => '15:00:00',
            'work_end' => '22:00:00',
            'work_total' => '07:00:00',
            'break_total' => '01:00:00',
            'created_at' => '2023-10-23 15:00:00',
            'updated_at' => '2023-10-23 22:00:00',
        ]);
        Attendance::create([
            'user_id' => 3,
            'date' => '2023-10-24',
            'work_start' => '15:00:00',
            'work_end' => '22:00:00',
            'work_total' => '07:00:00',
            'break_total' => '01:00:00',
            'created_at' => '2023-10-24 15:00:00',
            'updated_at' => '2023-10-24 22:00:00',
        ]);
        Attendance::create([
            'user_id' => 4,
            'date' => '2023-10-24',
            'work_start' => '09:00:00',
            'work_end' => '15:00:00',
            'work_total' => '06:00:00',
            'break_total' => '00:30:00',
            'created_at' => '2023-10-24 09:00:00',
            'updated_at' => '2023-10-24 15:00:00',
        ]);
        Attendance::create([
            'user_id' => 5,
            'date' => '2023-10-24',
            'work_start' => '10:00:00',
            'work_end' => '18:00:00',
            'work_total' => '08:00:00',
            'break_total' => '01:00:00',
            'created_at' => '2023-10-24 10:00:00',
            'updated_at' => '2023-10-24 08:00:00',
        ]);
        Attendance::create([
            'user_id' => 6,
            'date' => '2023-10-24',
            'work_start' => '15:00:00',
            'work_end' => '22:00:00',
            'work_total' => '07:00:00',
            'break_total' => '01:00:00',
            'created_at' => '2023-10-24 15:00:00',
            'updated_at' => '2023-10-24 22:00:00',
        ]);
        Attendance::create([
            'user_id' => 7,
            'date' => '2023-10-24',
            'work_start' => '09:00:00',
            'work_end' => '14:00:00',
            'work_total' => '05:00:00',
            'break_total' => '00:30:00',
            'created_at' => '2023-10-24 09:00:00',
            'updated_at' => '2023-10-24 14:00:00',
        ]);
        Attendance::create([
            'user_id' => 8,
            'date' => '2023-10-24',
            'work_start' => '15:00:00',
            'work_end' => '22:00:00',
            'work_total' => '07:00:00',
            'break_total' => '01:00:00',
            'created_at' => '2023-10-24 15:00:00',
            'updated_at' => '2023-10-24 22:00:00',
        ]);
        Attendance::create([
            'user_id' => 9,
            'date' => '2023-10-24',
            'work_start' => '08:00:00',
            'work_end' => '15:00:00',
            'work_total' => '07:00:00',
            'break_total' => '01:00:00',
            'created_at' => '2023-10-24 08:00:00',
            'updated_at' => '2023-10-24 15:00:00',
        ]);
        Attendance::create([
            'user_id' => 1,
            'date' => '2023-10-25',
            'work_start' => '07:30:00',
            'work_end' => '13:30:00',
            'work_total' => '06:00:00',
            'break_total' => '00:30:00',
            'created_at' => '2023-10-25 15:00:00',
            'updated_at' => '2023-10-25 22:00:00',
        ]);
        Attendance::create([
            'user_id' => 2,
            'date' => '2023-10-25',
            'work_start' => '15:00:00',
            'work_end' => '22:00:00',
            'work_total' => '07:00:00',
            'break_total' => '01:00:00',
            'created_at' => '2023-10-25 15:00:00',
            'updated_at' => '2023-10-25 22:00:00',
        ]);
    }
}
