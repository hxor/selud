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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::group(['middleware' => 'role:admin'], function () {
        Route::resource('user', 'UserController');
        Route::resource('bumd', 'BumdController');
        Route::resource('pajak', 'PajakController');

        Route::resource('rekening-1', 'Rekening1Controller');
        Route::resource('rekening-2', 'Rekening2Controller');
        Route::resource('rekening-3', 'Rekening3Controller');
    });


    Route::resource('neraca', 'NeracaController');
    Route::get('/neraca/report/search', 'NeracaController@formReport')->name('neraca.report.search');
    Route::post('/neraca/report/search', 'NeracaController@indexReport');
    Route::resource('neraca/{id}/detail', 'NeracaDetailController', ['names' => 'neraca.detail']);
    Route::get('neraca/{id}/report', 'NeracaDetailController@report')->name('neraca.detail.report');


    Route::resource('rkap', 'RkapController');
    Route::get('/rkap/report/search', 'RkapController@formReport')->name('rkap.report.search');
    Route::post('/rkap/report/search', 'RkapController@indexReport');
    Route::resource('rkap/{id}/detail', 'RkapDetailController', ['names' => 'rkap.detail']);
    Route::get('rkap/{id}/report', 'RkapDetailController@report')->name('rkap.detail.report');

    Route::resource('larugi', 'LarugiController');
    Route::get('/larugi/report/search', 'LarugiController@formReport')->name('larugi.report.search');
    Route::post('/larugi/report/search', 'LarugiController@indexReport');
    Route::resource('larugi/{id}/detail', 'LarugiDetailController', ['names' => 'larugi.detail']);
    Route::get('larugi/{id}/report', 'LarugiDetailController@report')->name('larugi.detail.report');


    Route::get('/profile', 'ProfileController@index')->name('profile.index');
    Route::put('/profile/update', 'ProfileController@update')->name('profile.update');
});


Route::group(['prefix' => 'table', 'as' => 'table.', 'middleware' => ['auth']], function () {
    Route::get('user', 'UserController@dataTable')->name('user');
    Route::get('bumd', 'BumdController@dataTable')->name('bumd');
    Route::get('pajak', 'PajakController@dataTable')->name('pajak');

    Route::get('rekening-1', 'Rekening1Controller@dataTable')->name('rekening-1');
    Route::get('rekening-2', 'Rekening2Controller@dataTable')->name('rekening-2');
    Route::get('rekening-3', 'Rekening3Controller@dataTable')->name('rekening-3');

    Route::get('neraca', 'NeracaController@dataTable')->name('neraca');
    Route::get('neraca/{id}/detail', 'NeracaDetailController@dataTable')->name('neraca.detail');
    Route::get('neraca/{bumd}/bulan/{bulan}/periode/{tahun}', 'NeracaController@reportDataTable')->name('neraca.report');

    Route::get('larugi', 'LarugiController@dataTable')->name('larugi');
    Route::get('larugi/{id}/detail', 'LarugiDetailController@dataTable')->name('larugi.detail');
    Route::get('larugi/{bumd}/bulan/{bulan}/periode/{tahun}', 'LarugiController@reportDataTable')->name('larugi.report');

    Route::get('rkap', 'RkapController@dataTable')->name('rkap');
    Route::get('rkap/{id}/detail', 'RkapDetailController@dataTable')->name('rkap.detail');
    Route::get('rkap/{bumd}/periode/{tahun}', 'RkapController@reportDataTable')->name('rkap.report');
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
