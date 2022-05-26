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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

route::get('activite', [App\Http\Controllers\myController::class,'index']);
route::get('contact', [App\Http\Controllers\ContactController::class,'show']);
//route::get('', [App\Http\Controllers\HomeController::class,'show']);
route::get('evenements', [App\Http\Controllers\EventController::class,'index']);
route::get('planning', [App\Http\Controllers\planningController::class,'index']);
route::get('admin', [App\Http\Controllers\AdminController::class,'show']);

require __DIR__.'/auth.php';
