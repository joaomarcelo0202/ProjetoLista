<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/sobre', function () {
    return 'Esta é a página Sobre';
});

Route::get('/alunos', function () {
    return 'Esta é a página de Alunos';
});

Route::get('/contato', function () {
    return 'Esta é a página de Contato';
});
Route::get('/produto/{id}', function ($id) {
    return 'Produto de id: ' . $id;
});

Route::get('/categoria/{id}', function ($id) {
    return 'Categoria de id: ' . $id;
});

Route::get('/usuario/{id}', function ($id) {
    return 'Usuário de id: ' . $id;
});