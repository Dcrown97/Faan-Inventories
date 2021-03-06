<?php

use App\Http\Controllers\FaanController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get', 'post'], '/', [FaanController::class, 'Home'])->name('home');
Route::match(['get', 'post'], '/search', [FaanController::class, 'Search'])->name('search');
Route::match(['get', 'post'], '/category', [FaanController::class, 'Category'])->name('category');
