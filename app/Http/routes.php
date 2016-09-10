<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('usuarios', ['as' => 'usuarios', 'uses' => 'UsersController@showUsers']);
Route::get('usuarios/listar', ['as' => 'usuarios.listar', 'uses' => 'UsersController@listar']);


 Route::get('/', function () {
     return view('welcome');
 });
