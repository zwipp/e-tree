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

Route::get('/doador', 'home_controller@doador');
Route::get('/', 'home_controller@home');
Route::get('/instituicoes', 'home_controller@instituicao');
Route::get('/login/mostrar', 'home_controller@login')->name('mostrar');
Route::get('/recepitor', 'home_controller@recepitor');
Route::get('/cadastro/doador', 'home_controller@cadastroDoador');
Route::get('/cadastro/instituicao', 'home_controller@cadastroInstituicao');
Route::post('/criar/usuario', 'usuario_controller@criar_usuario');
Route::post('/login/etree', 'Auth\LoginController@authenticate');

Auth::routes();

Route::middleware('auth')->group(function(){

    Route::post('/criar/produto', 'Produto_controller@criar_produto');
    Route::post('/criar/pedido', 'Pedido_controller@criar_pedido');
    Route::get('/cadastro/pedido', 'home_controller@pedidoproduto');
    Route::get('/perfil/receptor/{id}', 'home_controller@perfilreceptor');
    Route::get('/perfil/doador/{id}', 'home_controller@perfil');
    Route::get('/cadastro/produto', 'home_controller@cadastroProduto');
});

Route::middleware(['auth','adm'])->group(function(){
    Route::get('/adm', 'adm_controller@visualizarUsuarios');
    Route::delete('/perfil/{id}', 'adm_controller@delete');
    Route::post('/baixa/estoque', 'Produto_controller@baixa_estoque');
});