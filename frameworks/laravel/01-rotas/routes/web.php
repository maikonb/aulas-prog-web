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

Route::get('/rota1/rota2/rota3', function () {
    return "Seja bem vindo! Hello World Laravel!";
});

Route::get('/hello/{nome}/{sobrenome}', function($nome, $sobrenome) {
    return "Seja bem vindo ao Laravel, $nome $sobrenome";
});

Route::get('/nome/{nome?}', function($nome=null) {
    if (isset($nome))
        return "Hello, $nome";
    return "Faltou o nome no parametro.";
});
