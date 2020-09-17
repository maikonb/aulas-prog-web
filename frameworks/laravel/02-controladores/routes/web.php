<?php

use App\Http\Controllers\FirstController;
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

Route::get('/', [FirstController::class, 'products']);

Route::get('/products', [FirstController::class, 'productsView']);

Route::get('/products/view_params', 
    [FirstController::class, 'productsViewParams']);