<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::post('produtos/orcamento', 'ProdutoController@postAddCarrinho');
Route::post('produtos/compra', 'ProdutoController@postRealizaCompra');
Route::get('orcamento', 'ProdutoController@getOrcamento');
Route::get('compra', 'ProdutoController@getCompra');
Route::get('pedidos', 'ProdutoController@getPedidos');
Route::get('carrinho', 'ProdutoController@getCarrinho');

Route::post('busca', 'GeneralController@postBuscaProduto');
Route::get('/', 'GeneralController@index');
Route::get('sobre', 'GeneralController@sobre');
Route::get('contato', 'GeneralController@contato');
Route::get('login', 'GeneralController@login');
Route::get('cadastro', 'GeneralController@cadastro');
Route::post('usuarios/storecadastro', 'UsuarioController@postCadastro');
Route::get('produtos/produto/{id}', 'ProdutoController@getProduto');
Route::post('produtos/all', 'ProdutoController@postAll');
Route::post('enviamensagem', 'GeneralController@postContato');

Route::resource('produtos', 'ProdutoController');
Route::resource('usuarios', 'UsuarioController');

Route::get('logout', array('uses' => 'UsuarioController@doLogout'));
Route::get('login', array('uses' => 'UsuarioController@showLogin'));
Route::post('login', array('uses' => 'UsuarioController@doLogin'));
