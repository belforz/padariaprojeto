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
Route::get('index', function () {
    return view('index');
});
//Route::get('/contato','ContatoController@index');

//Route::post('/contato', 'ContatoController@store');

Route::get('/produtos','ProdutosController@index');

Route::post('/produtos', 'ProdutosController@store');

Route::get('/produtos-page', function () {
    return view('produtos-page');
});
Route::delete('/produtos-page', 'DeleteController@delete');

Route::get('login', function () {
    return view('login');
});

// Show the login form
Route::get('/login', 'LoginController@login');

// Handle the login form submission
Route::post('/login', 'LoginController@login');
