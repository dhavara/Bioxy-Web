<?php

use App\Http\Controllers\Auth\ProfileController;
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

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/leaderboard', [App\Http\Controllers\LeaderboardController::class, 'index'])->name('leaderboard');
Route::get('/profile/id={id}', [App\Http\Controllers\Auth\ProfileController::class, 'show']);


Route::middleware(['auth'])->group(function(){
    
        Route::middleware(['user'])->group(function () {
        
        Route::post('/profile', [App\Http\Controllers\Auth\ProfileController::class, 'profilePost'])->name('profile');
        Route::get('/profile', [App\Http\Controllers\Auth\ProfileController::class, 'profileGet']);

        Route::get('/profile/edit', [App\Http\Controllers\Auth\ProfileController::class, 'edit'])->name('profileEdit');
        Route::post('/profile/edit', [App\Http\Controllers\Auth\ProfileController::class, 'update'])->name('profileUpdate');

        Route::get('/quiz', [App\Http\Controllers\QuizController::class, 'show'])->name('quiz');
        Route::post('/quiz', [App\Http\Controllers\QuizController::class, 'check'])->name('check');
    
        Route::get('/shop', [App\Http\Controllers\Shop\ShopController::class, 'index'])->name('shop');
        Route::post('/shop', [App\Http\Controllers\Shop\ShopController::class, 'purchase'])->name('purchase');
    });
 
    
    Route::middleware(['admin'])->group(function () {
        Route::resource('/dashboard/user', App\Http\Controllers\Admin\UserController::class, [
            'names' => [
                'index' => 'user.index',
                'store' => 'faq.new',
            ]
        ]);
    });
 
});