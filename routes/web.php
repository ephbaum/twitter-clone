<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TwootController;
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

Route::controller(HomeController::class)
    ->name('home')
    ->group(function () {
        Route::get('/', 'index');
    });

Route::controller(MainController::class)
    ->middleware(['auth'])
    ->name('dashboard')
    ->group(function (){
    Route::get('/dashboard', 'index');
});


Route::controller(TwootController::class)->group(function () {
    Route::get('/twoots', 'index');
    Route::get('/twoot/{id}', 'show');
    Route::post('/twoot', 'store');
    Route::get('/twoot/{id}/delete', 'destroy');
});

require __DIR__.'/auth.php';
