<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserHabitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('kategori', KategoriController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

Route::resource('user', UserController::class)->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);
Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/', [FrontController::class, 'welcome']);
Route::get('about', [FrontController::class, 'about']);
Route::get('feedbacks', [FrontController::class, 'feedbacks']);

Route::get('yourhabit', [UserHabitController::class, 'yourhabit'])->name('yourhabit');
Route::get('userHabit', [UserHabitController::class, 'index'])->name('userHabit.index')->middleware('auth');
Route::get('/add-habit', [UserHabitController::class, 'store'])->name('add.habit');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/', function () {
        return view('admin.dashboard'); // Halaman dashboard admin
    })->name('admin.home');

    Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/userHabit', [UserHabitController::class, 'index'])->name('userHabit.index');
Route::post('/add-habit', [UserHabitController::class, 'store'])->name('add.habit');
Route::get('/yourhabit', [UserHabitController::class, 'yourhabit'])->name('yourhabit');

