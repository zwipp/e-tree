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

Route::get('/adm', 'adm_controller@visualizarUsuarios');
Route::get('/perfil/receptor/{id}', 'adm_controller@visualizarUsuarios');
Route::get('/perfil/doador/{id}', 'adm_controller@visualizarUsuarios');
Route::delete('/perfil/{id}', 'adm_controller@delete');

Route::get('/cadastro/produto', 'home_controller@cadastroProduto');
Route::get('/doador', 'home_controller@doador');
Route::get('/home', 'home_controller@home');
Route::get('/instituicoes', 'home_controller@instituicao');
Route::get('/login', 'home_controller@login');
Route::get('/perfil/{id}', 'home_controller@perfil');
Route::get('/recepitor', 'home_controller@recepitor');
Route::get('/cadastro/pedido', 'home_controller@pedidoproduto');
Route::get('/perfil/receptor/{id}', 'home_controller@perfilreceptor');
Route::get('/cadastro/doador', 'home_controller@cadastroDoador');
Route::get('/cadastro/instituicao', 'home_controller@cadastroInstituicao');

Route::post('/criar/usuario', 'usuario_controller@criar_usuario');
Route::post('/criar/produto', 'Produto_controller@criar_produto');
Route::post('/criar/pedido', 'Pedido_controller@criar_pedido');