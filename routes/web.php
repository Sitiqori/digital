<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


// Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('auth');
// Route::post('login', [AuthController::class, 'authenticating'])->middleware('auth');
// Route::get('register', [AuthController::class, 'register'])->middleware('auth');


// Route::get('logout', [AuthController::class, 'logout']);
// Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth', 'only_admin');
// Route::get('dashpetugas', [UserController::class, 'index'])->middleware('auth', 'only_petugas');
// Route::get('home', [DataController::class, 'index'])->middleware('auth', 'only_peminjam');

// Route::get('book', [BookController::class, 'index'])->middleware('auth');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticating']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'registerProcess']);

Route::get('logout', [AuthController::class, 'logout']);
//admin+petugas
Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('dashpetugas', [UserController::class, 'profile']);

Route::get('a-book', [BookController::class, 'abook']);
Route::get('abook-add', [BookController::class, 'add']);
Route::post('abook-add', [BookController::class, 'store'])->name('abook.store');
Route::get('abook-edit/{slug}', [BookController::class, 'edit']);
Route::put('abook-update/{slug}', [BookController::class, 'update'])->name('abook.update');

Route::get('a-category', [CategoryController::class, 'index']);
Route::get('category-add', [CategoryController::class, 'add']);
Route::post('category-add', [CategoryController::class, 'store'])->name('category.store');
Route::get('category-edit/{slug}', [CategoryController::class, 'edit']);
Route::put('category-update/{slug}', [CategoryController::class, 'update'])->name('category.update');
// Route::get('category-delete/{slug}', [CategoryController::class, 'delete']);
Route::delete('category-delete/{slug}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('deleted-category', [CategoryController::class, 'deleted'])->name('deleted-category');
Route::get('category-restore/{slug}', [CategoryController::class, 'restore'])->name('category-restore');
 



Route::get('a-user', [UserController::class, 'index']);

Route::get('a-transaction', [TransController::class, 'index']);

Route::get('a-rating', [BookController::class, 'arating']);



Route::get('home', [DashboardController::class, 'ind']);
Route::get('book', [BookController::class, 'index']);
Route::get('library', [UserController::class, 'library']);








