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

// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});

Route::get('/tasks', 'TasksController@index')->name('index');
Route::get('/create', 'TasksController@create')->name('create');
Route::post('/store', 'TasksController@store')->name('store');
Route::get('/edit/{id}', 'TasksController@edit')->name('edit');
Route::post('/update/{id}', 'TasksController@update')->name('update');
Route::get('/delete/{id}', 'TasksController@delete')->name('delete');

