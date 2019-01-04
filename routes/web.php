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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/', 'Controller@apresentacao')->name('inicio');
Route::get('/estoque', 'Controller@listagemEstoque')->name('mostraEstoque');
Route::get('/transacao', 'Controller@transacao')->name('transacao');
Route::get('/', 'Controller@login')->name('login');
Route::get('/tabela', 'Controller@tabela')->name('tabela');

