<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('index');


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);
// ================== Backend Routes ==================

Route::group(['namespace' => 'Backend', 'prefix' => 'company-backend', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'users'], function () {
        Route::any('/', [UserController::class, 'index'])->name('users.index');
        Route::any('account', [UserController::class, 'account'])->name('users.account');
        Route::any('update-user-status', [UserController::class, 'status'])->name('update-user-status');
        Route::any('delete-user/{id}', [UserController::class, 'delete'])->name('delete-user');
    });
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

});
