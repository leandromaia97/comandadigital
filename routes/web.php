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
Route::get('/gerente', 'GerenteController@MostrarViewGerente')->name('ViewGerente');
Route::get('/produtos', 'GerenteController@VerProdutos')->name('VerProdutos');
Route::get('/produtos/cadastro', 'GerenteController@CadastrarProduto')->name('CadastroProdutos');
Route::get('/mesas', 'GerenteController@VerMesas')->name('VerMesas');
Route::get('/mesas/cadastro', 'GerenteController@CadastrarMesa')->name('CadastroMesas');
