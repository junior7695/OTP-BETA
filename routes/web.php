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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/respuesta',function(){
  return view('response');
});
Route::get('activacion/{code}','UserController@activate');
Route::post('complete/{id}','UserController@complete');
Route::get('/key', 'SolicitarClaveController@index')->name('key.index');
Route::post('/key','SolicitarClaveController@create')->name('key.solicitar');