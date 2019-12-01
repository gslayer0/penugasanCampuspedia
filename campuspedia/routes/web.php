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
    return view('welcome');
});

//ROUTE INDEX SISWA
Route::get('/siswa','SiswaController@index');

//ROUTE INSERT SISWA
Route::get('/siswa/insert','SiswaController@insert');
Route::post('/siswa/store','SiswaController@store');

//ROUTE UPDATE SISWA
Route::get('/siswa/edit/{id}','SiswaController@edit');
Route::post('/siswa/update','SiswaController@update');

//ROUTE DELETE SISWA
Route::get('/siswa/delete/{id}', 'SiswaController@delete');

