<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/home", [HomeController::class,"index"])->name("home");

//auth
Route::get("/login", [AuthController::class,"login"])->name('login');
Route::post("/login", [AuthController::class,"authenticated"]);
Route::get("/logout", [AuthController::class,"logout"]);

//dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');