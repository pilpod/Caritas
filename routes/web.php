<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WhatCanYouDo\DonateController;
use App\Http\Controllers\WhatCanYouDo\ExplainTheProjectController;
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


Route::middleware('language')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home/{language}', [HomeController::class, 'setLanguage'])->name('language');
});

Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/profile/', [DashboardController::class, 'create'])->name('dashboard.create');
    Route::post('/dashboard/profile/', [DashboardController::class, 'store'])->name('dashboard.store');
    Route::get('/dashboard/profile/{id}', [DashboardController::class, 'edit'])->name('dashboard.edit');
    Route::put('/dashboard/profile/{id}', [DashboardController::class, 'update'])->name('dashboard.update');

    Route::get('/dashboard/profile/{id}/logo', [DashboardController::class, 'editLogo'])->name('logo.edit');
    Route::put('/dashboard/profile/{id}/logo', [DashboardController::class, 'updateLogo'])->name('logo.update');
    Route::delete('/dashboard/profile/{id}/logo', [DashboardController::class, 'deleteLogo'])->name('logo.delete');

    Route::get('/user/profile-information', [UserProfileController::class, 'edit'])->name('user-profile-information.edit');

    Route::get('/dashboard/about', [AboutController::class, 'index'])->name('about');
    Route::post('/dashboard/about', [AboutController::class, 'store'])->name('about.store');
    Route::put('/dashboard/about/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::put('/dashboard/about/{id}/image', [AboutController::class, 'updateImage'])->name('about.updateImage');

    Route::get('/dashboard/donate', [DonateController::class, 'index'])->name('donate');
    Route::post('/dashboard/donate', [DonateController::class, 'store'])->name('donate.store');
    Route::put('/dashboard/donate/{id}', [DonateController::class, 'update'])->name('donate.update');
    Route::put('/dashboard/donate/{id}/image', [DonateController::class, 'updateImage'])->name('donate.updateImage');

    Route::get('/dashboard/explain-the-project', [ExplainTheProjectController::class, 'index'])->name('explainTheProject');
    Route::post('/dashboard/explain-the-project', [ExplainTheProjectController::class, 'store'])->name('explainTheProject.store');
    Route::put('/dashboard/explain-the-project/{id}', [ExplainTheProjectController::class, 'update'])->name('explainTheProject.update');


});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
