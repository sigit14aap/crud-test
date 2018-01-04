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

Route::resource('/', 'BarangController',[
    'names' => [
        'store' => 'barang.store',
        'create' => 'barang.create',
    ],
    'except' => [
    	'destroy' => 'barang.destroy',
    	'home' => 'barang.index',
    	'edit' => 'barang.edit',
    	'update' => 'barang.update'
    ]
]);
Route::delete('/delete/{id}', 'BarangController@destroy')->name('destroy');
Route::get('/', 'BarangController@index')->name('home');
Route::get('/edit/{id}', 'BarangController@edit')->name('edit');
Route::post('/edit/{id}', 'BarangController@update')->name('update');
