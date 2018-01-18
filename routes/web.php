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

// Client
Route::get('/client', 'ClientController@index');
Route::get('/client/create', 'ClientController@create');
Route::get('/client/edit/{id}', 'ClientController@edit');
Route::post('/client/edit', 'ClientController@save')->name('client.save');
