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

//-----------------------------------------------
//- Home
Route::get('/', 'appController@index')
->name('home');


//-----------------------------------------------
//- Emails
Route::get('/primeiro', 'appController@enviarPrimeiroEmail')
->name('primeiro');

Route::get('/segundo', 'appController@enviarSegundoEmail')
->name('segundo');
