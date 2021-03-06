<?php

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

Route::get('/', 'ProductController@showAll')->name('index');

Route::middleware(['guest'])->group(function () {
    Route::get('/criar-conta', function () {
        return view('site.criarConta');
    })->name('criarConta');

    Route::get('/entrar', function () {
        return view('site.entrar');
    })->name('entrar');
});

Route::prefix('auth')->group(function () {
    Route::post('/login', 'AuthController@login')->name('auth.login');
    Route::get('/logout', 'AuthController@logout')->name('auth.logout');
});

Route::get('/meu-perfil', function () {
    return view('site.meuPerfil');
})->name('meuPerfil');

Route::get('/esqueci-senha', function () {
    return view('site.esqueciSenha');
})->name('esqueciSenha');


Route::prefix('usuarios')->group(function () {
    Route::post('/criar', 'UserController@create')->name('user.create');
});

Route::middleware(['PrivateRoute'])->group(function () {
    Route::prefix('usuarios')->group(function () {
        Route::post('/editar', 'UserController@edit')->name('user.edit');
    });
    Route::prefix('produtos')->group(function () {
        Route::get('/', 'ProductController@index')->name('produtos.index');
        Route::get('/anunciar', 'ProductController@publish')->name('produtos.anunciar');
        Route::post('/anunciar', 'ProductController@create')->name('produtos.create');
        Route::post('/searchProducts', 'ProductController@find')->name('produtos.find');
    });
    Route::prefix('carrinho')->group(function () {
        Route::get('/', 'CartController@index')->name('carrinho.index');
        Route::get('/adicionar', 'CartController@create')->name('carrinho.create');
        Route::get('/excluir', 'CartController@delete')->name('carrinho.delete');
        Route::post('/atualizarQuantidade', 'CartController@updateQuantity')->name('carrinho.updateQuantity');
    });
});
