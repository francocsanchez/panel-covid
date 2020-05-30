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

Route::get('/','PagesController@home')->name('parte-prensa');
Route::get('/parte-salud','PagesController@home')->name('parte-salud');
Route::get('/seguimiento-cuarentena','PagesController@home')->name('seguimiento-cuarentena');
Route::get('/internaciones-plazas','PagesController@home')->name('internaciones-plazas');
Route::get('/numeros-globales','PagesController@home')->name('numeros-globales');

Route::get('/panel','PanelController@index')->name('panel');
Route::get('/pacientes','PanelController@pacientes')->name('pacientes-panel');