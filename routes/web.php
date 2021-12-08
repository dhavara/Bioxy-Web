<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::post('/profile', [App\Http\Controllers\Auth\ProfileController::class, 'profilePost'])->name('profile');
    Route::get('/profile', [App\Http\Controllers\Auth\ProfileController::class, 'profileGet']);

    
    Route::get('/quiz', [App\Http\Controllers\Soal\QuizController::class, 'show'])->name('quiz');
    Route::post('/quiz', [App\Http\Controllers\Soal\QuizController::class, 'check'])->name('check');
    Route::post('/quiz/start', [App\Http\Controllers\Soal\QuizController::class, 'difficulty'])->name('difficulty');
    Route::get('/quiz/start', [App\Http\Controllers\Soal\QuizController::class, 'difficulty']);

});