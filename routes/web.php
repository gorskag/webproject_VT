<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommandsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/commands', [CommandsController::class, 'commmands']);

Auth::routes();

Route::get('/home', function () {
    
    return view('home');
})->middleware('auth');

Route::get("users", [RegisterController::class, 'create']);

Route::post("register", [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'dashboard'])->name('dashboard');