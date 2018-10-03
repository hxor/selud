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

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'role:admin']], function () {
    Route::resource('user', 'UserController');
    Route::resource('bumd', 'BumdController');
    Route::resource('pajak', 'PajakController');
});


Route::group(['prefix' => 'table', 'as' => 'table.', 'middleware' => ['auth']], function () {
    Route::get('user', 'UserController@dataTable')->name('user');
    Route::get('bumd', 'BumdController@dataTable')->name('bumd');
    Route::get('pajak', 'PajakController@dataTable')->name('pajak');
});

/**
 * Example Role Middleware
 */
Route::get('/admin', function () {
    return 'admin';
})->middleware(['auth', 'role:admin']);
 Route::get('/user', function () {
    return 'user';
})->middleware(['auth', 'role:user']);
