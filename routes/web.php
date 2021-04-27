<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['permission:edit_pacientes|view_pacientes|delete_pacientes|create_pacientes']], function () {
    Route::resource('pacientes', 'pacienteController');
});


Route::group(['middleware' => ['permission:edit_users|view_users|delete_users|create_users']], function () {
    Route::resource('users', 'UserController');
});

Route::group(['middleware' => ['permission:edit_ficha_pacientes|view_ficha_pacientes|delete_ficha_pacientes|create_ficha_pacientes']], function () {
    Route::resource('fichaPacientes', 'ficha_pacienteController');
});
