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

        /** User Manager */
        Route::prefix('user')->name('user.')->group(function () {
            Route::get('/', 'Admin\UserController@index')->name('index');
            Route::get('add', 'Admin\UserController@add')->name('add');
            Route::get('edit/{id_user}', 'Admin\UserController@edit')->name('edit');

            Route::post('create', 'Admin\UserController@create')->name('create');
            Route::post('update/{id_user}', 'Admin\UserController@update')->name('update');
            Route::post('delete/{id_user}', 'Admin\UserController@delete')->name('delete');
        });

        /** Center Manager */
        Route::prefix('center')->name('center.')->group(function () {
            Route::get('/', 'Admin\CenterController@index')->name('index');
            Route::get('add', 'Admin\CenterController@add')->name('add');
            Route::get('edit/{id_center}', 'Admin\CenterController@edit')->name('edit');

            Route::post('create', 'Admin\CenterController@create')->name('create');
            Route::post('update/{id_center}', 'Admin\CenterController@update')->name('update');
            Route::post('delete/{id_center}', 'Admin\CenterController@delete')->name('delete');
        });

        /** Service Manager */
        Route::prefix('service')->name('service.')->group(function () {
            Route::get('/', 'Admin\ServiceController@index')->name('index');
            Route::get('add', 'Admin\ServiceController@add')->name('add');
            Route::get('edit/{id_service}', 'Admin\ServiceController@edit')->name('edit');

            Route::post('create', 'Admin\ServiceController@create')->name('create');
            Route::post('update/{id_service}', 'Admin\ServiceController@update')->name('update');
            Route::post('delete/{id_service}', 'Admin\ServiceControoler@delete')->name('delete');
        });
    });
});
