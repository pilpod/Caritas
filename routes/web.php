<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserProfileController;

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

Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/profile/', [DashboardController::class, 'create'])->name('dashboard.create');
    Route::post('/dashboard/profile/', [DashboardController::class, 'store'])->name('dashboard.store');
    Route::get('/dashboard/profile/{id}', [DashboardController::class, 'edit'])->name('dashboard.edit');
    Route::put('/dashboard/profile/{id}', [DashboardController::class, 'update'])->name('dashboard.update');
    Route::get('/user/profile-information', [UserProfileController::class, 'edit'])->name('user-profile-information.edit');

});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);