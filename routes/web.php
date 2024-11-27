<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\authServicea;


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

Route::get("/", [mainController::class,"index"])->name("index");

Route::get("/login",[mainController::class,"login"])->name("login");
Route::post("/login",[mainController::class,"user_login"])
    ->name("user.login")
    ->middleware(authServicea::class);

// Route::middleware(['authServicea'])->group(function () {

//     Route::post("/login",[mainController::class,"user_login"])->name("user.login");
// });

Route::get("/user/signup",[mainController::class,"user_signup"])->name("user.signup");
Route::post("/user/signup",[mainController::class,"user_registration"])->name("user.signup");