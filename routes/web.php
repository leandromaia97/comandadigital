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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gerente', 'GerenteController@ViewGerente')->name('ViewGerente');
Route::get('/produtos', 'ProdutosController@index')->name('VerProdutos');
Route::get('/produtos/cadastro', 'ProdutosController@create')->name('CadastroProdutos');
Route::get('/mesas', 'MesasController@index')->name('VerMesas');
Route::get('/mesas/cadastro', 'MesasController@create')->name('CadastroMesas');
Route::get('/cozinha/cadastro', 'CozinhaController@create')->name('CadastroCozinha');
Route::get('/garcom/cadastro', 'GarcomController@create')->name('CadastroGarcom');
Route::get('/garcom', 'GarcomController@index')->name('VerGarcons');
Route::get('/pedidos/cadastro', 'PedidosController@create')->name('CadastroPedidos');
Route::get('/pedidos', 'PedidosController@index')->name('VerPedidos');

//Rotas para salvar dados
Route::post('salvarpedido', 'PedidosController@store')->name('SalvarPedido');
Route::post('salvarmesa', 'MesasController@store')->name('SalvarMesa');
Route::post('salvarcozinha', 'CozinhaController@store')->name('SalvarCozinha');
Route::post('salvarproduto', 'ProdutosController@store')->name('SalvarProduto');
Route::post('salvargarcom', 'GarcomController@store')->name('SalvarGarcom');