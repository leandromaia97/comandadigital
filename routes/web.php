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
Route::get('/gerente', 'ViewGerenteController@MostrarViewGerente')->name('ViewGerente');
Route::get('/produtos', 'ViewGerenteController@VerProdutos')->name('VerProdutos');
Route::get('/produtos/cadastro', 'ViewGerenteController@CadastrarProduto')->name('CadastroProdutos');
Route::get('/mesas', 'ViewGerenteController@VerMesas')->name('VerMesas');
Route::get('/mesas/cadastro', 'ViewGerenteController@CadastrarMesa')->name('CadastroMesas');
Route::get('/cozinha/cadastro', 'ViewGerenteController@CadastrarCozinha')->name('CadastroCozinha');
Route::get('/garcom/cadastro', 'ViewGerenteController@CadastrarGarcom')->name('CadastroGarcom');
Route::get('/garcom', 'ViewGerenteController@VerGarcons')->name('VerGarcons');
Route::get('/pedidos/cadastro', 'ViewGerenteController@CadastrarPedidos')->name('CadastroPedidos');
Route::get('/pedidos', 'ViewGerenteController@VerPedidos')->name('VerPedidos');
