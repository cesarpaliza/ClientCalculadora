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
//Route::resource('/calculadora', 'CalculadoraController');
Route::get('/calculadora/suma', 'CalculadoraController@suma')->name('calculadora.suma');
Route::post('calculadora/resta', 'CalculadoraController@resta')->name('calculadora.resta');
Route::post('calculadora/multiplicacion', 'CalculadoraController@multiplicacion')->name('calculadora.multiplicacion');
Route::post('calculadora/division', 'CalculadoraController@division')->name('calculadora.division');
