<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $param = [
            'name' => 'テスト太郎',
            'email' => 'taro@test.com',
            'email_verified_at' => '2023-10-23 12:00:00',
            'password'  => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => '2023-10-23 09:00:00',
            'updated_at' => '2023-10-23 12:00:00',
        ];
            DB::table('users')->insert($param);

        $param = [
            'name' => 'テスト花子',
            'email' => 'hanako@test.com',
            'email_verified_at' => '2023-10-23 12:00:00',
            'password'  => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => '2023-10-23 09:00:00',
            'updated_at' => '2023-10-23 12:00:00',
        ];
            DB::table('users')->insert($param);

            $param = [
            'name' => 'テスト鉄子',
            'email' => 'tetsuko@test.com',
            'email_verified_at' => '2023-10-24 12:00:00',
            'password'  => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => '2023-10-24 09:00:00',
            'updated_at' => '2023-10-24 12:00:00',
        ];
            DB::table('users')->insert($param);

            $param = [
            'name' => 'テスト三郎',
            'email' => 'saburo@test.com',
            'email_verified_at' => '2023-10-24 12:00:00',
            'password'  => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => '2023-10-24 09:00:00',
            'updated_at' => '2023-10-24 12:00:00',
        ];
            DB::table('users')->insert($param);

            $param = [
            'name' => 'テスト京子',
            'email' => 'kyoko@test.com',
            'email_verified_at' => '2023-10-24 12:00:00',
            'password'  => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => '2023-10-24 09:00:00',
            'updated_at' => '2023-10-24 12:00:00',
        ];
            DB::table('users')->insert($param);

            $param = [
            'name' => 'テスト博',
            'email' => 'hiroshi@test.com',
            'email_verified_at' => '2023-10-24 12:00:00',
            'password'  => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => '2023-10-24 09:00:00',
            'updated_at' => '2023-10-24 12:00:00',
        ];
            DB::table('users')->insert($param);

            $param = [
            'name' => 'テスト七子',
            'email' => 'nanako@test.com',
            'email_verified_at' => '2023-10-24 12:00:00',
            'password'  => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => '2023-10-24 09:00:00',
            'updated_at' => '2023-10-24 12:00:00',
        ];
            DB::table('users')->insert($param);

        $param = [
            'name' => 'テスト五郎',
            'email' => 'goro@test.com',
            'email_verified_at' => '2023-10-24 15:00:00',
            'password'  => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => '2023-10-24 10:00:00',
            'updated_at' => '2023-10-24 15:00:00',
        ];
            DB::table('users')->insert($param);

        $param = [
            'name' => 'テスト一郎',
            'email' => 'ichiro@test.com',
            'email_verified_at' => '2023-10-24 13:00:00',
            'password'  => Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => '2023-10-24 09:00:00',
            'updated_at' => '2023-10-24 13:00:00',
        ];
            DB::table('users')->insert($param);
    }
}
