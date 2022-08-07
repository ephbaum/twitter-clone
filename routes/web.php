<?php

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
    $twoots = \App\Models\Twoot::all()->sortByDesc('id');
    return view('welcome', ['twoots' => $twoots]);
});

Route::get('/dashboard', function () {
    $twoots = \App\Models\Twoot::all()->sortByDesc('id');
    return view('dashboard', ['twoots' => $twoots]);
})->middleware(['auth'])->name('dashboard');

Route::controller(\App\Http\Controllers\TwootController::class)->group(function () {
    Route::get('/twoots', 'index');
    Route::get('/twoot/{id}', 'show');
    Route::post('/twoot', 'store');
    Route::get('/twoot/{id}/delete', 'destroy');
});

require __DIR__.'/auth.php';
