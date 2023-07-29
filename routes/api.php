<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');

Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');

Route::post('/forget_password_process', [ForgetPasswordController::class, 'forget_password'])->name('forget_password_process');