<?php

use App\Http\Controllers\InterestController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('posts', function () {
//    return view('posts');
//
//});

Route::get('/search', [InterestController::class, 'search']);
Route::get('/',function () {
return view('auth.login');

});


Auth::routes();




Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('interests', InterestController::class);

Route::get('admin', [\App\Http\Controllers\Admin\AdminController::class, 'show'])->name('admin')->middleware('admin');

Route::get('/deleteProduct/{id}', [App\Http\Controllers\InterestController::class, 'delete'])->name('delete');

