<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\authServicea;
use App\Http\Middleware\LoginCheck;


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

// Route::middleware(['loginCheck'])->group(function(){

//     Route::get('/admin/dashboard', [mainController::class, "admin_dashboard"])->name("admn.dashboard");
// });

Route::middleware([LoginCheck::class])->group(function(){
    Route::get('/admin/dashboard', [mainController::class, "admin_dashboard"])->name("admin.dashboard");
    Route::get('/admin/settings',[mainController::class, "admin_settings"])->name('admin.settings');

});

Route::get("/user/signup",[mainController::class,"user_signup"])->name("user.signup");
Route::post("/user/signup",[mainController::class,"user_registration"])->name("user.signup");

Route::get('/logout', [mainController::class, "logout"])->name('logout');
