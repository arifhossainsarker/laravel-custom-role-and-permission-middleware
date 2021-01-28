<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth', 'user.permission'], 'namespace' => 'App\Http\Controllers'], function () {
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');
    Route::resource('user', 'UserController');
});

require __DIR__.'/auth.php';
