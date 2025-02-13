<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', 'App\Http\Controllers\LoginController@login') -> name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@logar') -> name('login');
Route::get('/logout', 'App\Http\Controllers\LoginController@deslogar') -> name('deslogar');

Route::get('/produto/listar/', 'App\Http\Controllers\ProdutoController@listarProduto') -> name('produto.listar');

Route::get('/', 'App\Http\Controllers\produtoController@listarHome') -> name('home') ;

Route::post('/roedor/cadastro', 'App\Http\Controllers\RoedorController@adicionar') -> middleware('App\Http\Middleware\CheckAuth') ->name("roedor.cadastro");
Route::get('/roedor/cadastro', 'App\Http\Controllers\RoedorController@pagina')->name("roedor.view");
Route::get('/roedor/alterar', 'App\Http\Controllers\RoedorController@listar')->name("roedor.listar");
Route::put('/roedor/alterar', 'App\Http\Controllers\RoedorController@alterar')->name("roedor.alterar");
Route::delete('/roedor/alterar', 'App\Http\Controllers\RoedorController@deletar')->name("roedor.remover");

Route::post('/categoria/cadastro', 'App\Http\Controllers\CategoriaController@adicionar')->name("categoria.cadastro");
Route::get('/categoria/cadastro', 'App\Http\Controllers\CategoriaController@pagina')->name("categoria.view");
Route::get('/categoria/alterar', 'App\Http\Controllers\CategoriaController@listar')->name("categoria.listar");
Route::put('/categoria/alterar', 'App\Http\Controllers\CategoriaController@alterar')->name("categoria.alterar");
Route::delete('/categoria/alterar', 'App\Http\Controllers\CategoriaController@deletar')->name("categoria.remover");


Route::get('/usuario/cadastro', function () {   
    return view('cadUsuario');
}) -> name("cadastraUsuario");

Route::post('/usuario/cadastro', 'App\Http\Controllers\UsuarioController@cadastrar') -> name('criaUsuario');


Route::get('/produto/cadastro', 'App\Http\Controllers\ProdutoController@pagina')->name("produto.view");
Route::post('/produto/cadastro', 'App\Http\Controllers\ProdutoController@adicionar')->name("produto.cadastro");

Route::get('/produto/alterar', 'App\Http\Controllers\ProdutoController@listar')->name("produto.listar");
Route::put('/produto/alterar', 'App\Http\Controllers\ProdutoController@alterar')->name("produto.alterar");
Route::delete('/produto/alterar', 'App\Http\Controllers\ProdutoController@deletar')->name("produto.remover");





