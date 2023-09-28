<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorktimeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BreaktimeController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', [WorktimeController::class, 'index'])->name('worktime_index');
Route::post('/worktime/start', [WorktimeController::class, 'store'])->name('worktime_start');
Route::patch('/worktime/end', [WorktimeController::class, 'update'])->name('worktime_end');

Route::post('/breaktime/start', [BreaktimeController::class, 'store'])->name('breaktime_start');
Route::patch('/breaktime/end', [BreaktimeController::class, 'update'])->name('breaktime_end');

Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance_index');
