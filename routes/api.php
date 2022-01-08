<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\UserController;
use App\Http\Controllers\Api\Quiz\QuizController;
use App\Http\Controllers\Api\SoalController;
use App\Http\Controllers\Api\DifficultyController;
use App\Http\Controllers\Api\FrameController;
use App\Http\Controllers\Api\LeaderboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [LoginController::class, 'login']);
Route::post('refresh',  [LoginController::class, 'refresh']);

Route::group(['middleware'=>'auth:api'], function() {
    Route::post('logout', [LoginController::class, 'logout']);

    // user
    Route::get('users',  [UserController::class, 'index']);
    Route::get('users/{id}',  [UserController::class, 'show']);

    // soal
    Route::get('soals',  [SoalController::class, 'index']);
    Route::get('soals/{id}',  [SoalController::class, 'show']);

    // soal
    Route::get('frames',  [FrameController::class, 'index']);
    Route::get('frames/{id}',  [FrameController::class, 'show']);

    // difficulty
    Route::get('difficulty',  [DifficultyController::class, 'difficulty']);

    // quiz
    Route::get('quiz/{difficulty}',  [QuizController::class, 'quiz']);
    Route::post('quiz/store',  [QuizController::class, 'store']);

    // leaderboard
    Route::get('leaderboard',  [LeaderboardController::class, 'leaderboard']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
