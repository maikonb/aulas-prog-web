<?php

use Illuminate\Http\Request;
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

Route::get('/regras/{nome}/{n}', function($nome, $n) {
    for ($i=0;$i<$n;$i++) {
        echo "[$i] Olá! Seja bem vindo, $nome<br>";
    }
})
->where('nome', '[A-Za-z]+')
->where('n', '[0-9]+');

Route::get('/produtos', function() {
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
    echo "<li>Mouse</li>";
    echo "<li>Teclado</li>";
    echo "</ol>";
})->name('produtos');

Route::prefix('app')->group(function(){

    Route::get('/', function() {
        return view('app');
    })->name('app.index');
    
    Route::get('/usuario', function() {
        return view('usuario');
    })->name('app.usuario');
    
    Route::get('/perfil', function() {
        return view('perfil');
    })->name('app.perfil');

});

Route::get('produtos1', function() {
    return redirect('produtos');
});

Route::get('produtos2', function() {
    return redirect()->route('produtos');
});

Route::redirect('produtos3', 'produtos', 301);

Route::post('/http_requests', function (Request $request) {
    return 'Hello POST';
});

Route::delete('/http_requests', function (Request $request) {
    return 'Hello DELETE';
});

Route::put('/http_requests', function (Request $request) {
    return 'Hello PUT';
});

Route::patch('/http_requests', function (Request $request) {
    return 'Hello PATCH';
});

Route::options('/http_requests', function (Request $request) {
    return 'Hello OPTIONS';
});

Route::get('/http_requests', function (Request $request) {
    return 'Hello GET';
});