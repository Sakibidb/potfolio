<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'popup']);
Route::get('home', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);
Route::get('portfolio', [HomeController::class, 'portfolio']);
Route::get('resume', [HomeController::class, 'resume']);
Route::get('service', [HomeController::class, 'service']);
Route::get('contact', [HomeController::class, 'contact']);