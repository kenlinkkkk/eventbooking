<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', function () {
            return view('admin.index');
        })->name('index');

        Route::prefix('user')->name('user.')->group(function () {
            Route::get('/', 'Admin\UserController@index')->name('index');
            Route::get('add', 'Admin\UserController@add')->name('add');
            Route::get('edit/{id_user}', 'Admin\UserController@edit')->name('edit');

            Route::post('create', 'Admin\UserController@create')->name('create');
            Route::post('update/{id_user}', 'Admin\UserController@update')->name('update');
            Route::post('delete/{id_user}', 'Admin\UserController@delete')->name('delete');
        });
    });
});
