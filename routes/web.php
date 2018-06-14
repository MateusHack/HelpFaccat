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

Route::get('/home', 'AnuncioController@listaHelp')->name('home')->middleware('auth');

Route::get('/meushelps', 'AnuncioController@meusHelps')->name('meusHelps')->middleware('auth');

Route::get('/criarhelp', 'AnuncioController@criarHelp')->name('criarHelp')->middleware('auth');
Route::Post('/criarhelp', 'AnuncioController@criarHelp')->name('criarHelp')->middleware('auth');

Route::Post('/salvahelp', 'AnuncioController@salvaHelp')->name('salvaHelp')->middleware('auth');

Route::Post('/editarhelp', 'AnuncioController@editarHelp')->name('editarHelp')->middleware('auth');
Route::get('/editarhelp', 'AnuncioController@returnHome')->name('editarHelp')->middleware('auth');
Route::Post('/apagarhelp', 'AnuncioController@apagarHelp')->name('apagarHelp')->middleware('auth');

Route::post('/verhelp', 'AnuncioController@verHelp')->name('verHelp')->middleware('auth');
Route::get('/verhelp', 'AnuncioController@returnHome')->name('verHelp')->middleware('auth');
Route::post('/confirmahelp', 'AnuncioController@confirmaHelp')->name('confirmaHelp')->middleware('auth');
Route::get('/confirmahelp', 'AnuncioController@returnHome')->name('confirmaHelp')->middleware('auth');
Route::get('/helps', 'AnuncioController@helps')->name('helps')->middleware('auth');

