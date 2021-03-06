<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('guru', 'GuruController');
Route::resource('jurusan', 'JurusanController');
Route::resource('kelas', 'KelasController');
Route::resource('matpel', 'MatpelController');
Route::resource('jampel', 'JampelController');
Route::resource('jadwalpel', 'JadwalpelController');
Route::resource('jabatan', 'JabatanController');
Route::resource('absenguru', 'AbsenguruController');
Route::resource('perijinan', 'PerijinanController');
Auth::routes();

Route::get('/home', 'HomeController@index');
