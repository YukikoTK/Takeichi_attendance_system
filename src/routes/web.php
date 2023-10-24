<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorktimeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BreaktimeController;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


require __DIR__.'/auth.php';

Route::middleware('verified')->group(function () {

    Route::get('/', [WorktimeController::class, 'index'])->name('worktime_index');
    Route::post('/worktime/start', [WorktimeController::class, 'store'])->name('worktime_start');
    Route::patch('/worktime/end', [WorktimeController::class, 'update'])->name('worktime_end');

    Route::post('/breaktime/start', [BreaktimeController::class, 'store'])->name('breaktime_start');
    Route::patch('/breaktime/end', [BreaktimeController::class, 'update'])->name('breaktime_end');

    Route::get('/attendance/{date?}', [AttendanceController::class, 'show'])->name('attendance_show');

    Route::get('/member', [MemberController::class, 'index'])->name('member_index');
    Route::get('/member/personal/{name?}', [MemberController::class, 'show'])->name('member_personal');

});

