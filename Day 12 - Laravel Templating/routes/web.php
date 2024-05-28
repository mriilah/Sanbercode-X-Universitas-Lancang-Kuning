<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\authController;
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

route::get('/daftar', [authController::class, "daftar"]);

route::post('/welcome',[authController::class, "register"]);

route::get('/page', function(){
    return view("page.data-table");
});

route::get('/table', function(){
    return view("page.table");
});