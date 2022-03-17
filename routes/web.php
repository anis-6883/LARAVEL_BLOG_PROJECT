<?php

use App\Http\Controllers\HomeController;
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
// })->middleware(['auth', 'verified']);

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::view('/profile/edit', 'auth.update-profile')->middleware('auth')->name('user.profile');
Route::view('/profile/password', 'auth.update-password')->middleware('auth')->name('user.update-password');
