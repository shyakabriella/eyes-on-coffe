<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffePageController;


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

Route::get('/', [CoffePageController::class, 'index'])->name('/');
Route::get('/about', [CoffePageController::class, 'about'])->name('about');

// Route::get('/', function () {
//     return view('pages/index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
