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

// Route::get('/adm', 'adm_controller@index');
Route::get('/adm', 'adm_controller@visualizarUsuario');
Route::get('/cadastro/produto', 'home_controller@cadastroProduto');
Route::get('/doador', 'home_controller@doador');
Route::get('/home', 'home_controller@home');
Route::get('/instituicoes', 'home_controller@instituicao');
Route::get('/login', 'home_controller@login');
Route::get('/perfil', 'home_controller@perfil');
Route::get('/recepitor', 'home_controller@recepitor');
Route::get('/cadastro/pedido', 'home_controller@pedidoproduto');
Route::get('/perfil/receptor', 'home_controller@perfilreceptor');

Route::post('/criar/usuario', 'usuario_controller@criar_usuario');
