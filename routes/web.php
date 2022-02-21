<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentClassController;

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

Route::prefix('admin')->middleware('localization')->group(function () {
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'store']);
    Route::get('logout', [UserController::class, 'logout'])
        ->name('logout');
    Route::prefix('users')->group(function () {
        Route::get('home', [UserController::class, 'home'])
            ->name('home');
    });
    Route::resources([
        'students' => StudentController::class,
        'classes' => ClassController::class,
        'student_class' => StudentClassController::class
    ]);
});
Route::get('change-language/{language}', [UserController::class, 'changeLanguage'])
    ->name('change-language');
