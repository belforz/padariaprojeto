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

Route::get('/produtos-page','ViewController@index');

Route::post('/produtos', 'ProdutosController@store');

Route::get('upload/{filename}',function($filename) {
    $path = storage_path('app/uploads/'. $filename);

    if (!file_exists($path)){
        abort(404);

    }
return response()->file($path);
})->where ('filename','(.*)');

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

use Illuminate\Support\Facades\Http;

Route::get('/minha-rota', function () {
    $response = Http::get('https://exemplo.com/api/dados');
    $data = $response->json();
    
    // Faça algo com os dados aqui
    
    return view('minha_view', compact('data'));
});



// Rota para a deleção e a nova mostra do produto

Route::get('/produto-escolhido','ProdutosController@index2');

Route::get('/produto-escolhido/excluir/{id}','ProdutosController@destroy');

Route::get('/produto-escolhido/escolhido/{id}','ProdutosController@show');


Route::get('/download-csv', 'ProdutosController@download');





