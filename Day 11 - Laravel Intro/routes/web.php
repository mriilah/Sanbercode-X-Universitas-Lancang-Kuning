<?php

use App\Http\Controllers\homeController as ControllersHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\daftarController;
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

Route::get('/', [homeController::class, "index"]);

route::get('/daftar', [daftarController::class, "daftar"]);

route::post('/welcome',[daftarController::class, "register"]);