<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livros', [LivrosController:: class, 'mostrar']);

Route::get('/livros/cadastro', [LivrosController:: class, 'cadastro']);

Route::post('/livros', [LivrosController::class, 'cadastrar']);

Route::get('/livros/{id}/editar', [LivrosController:: class, 'editar']);

Route::put('/livros/{id}', [LivrosController::class, 'atualizar']);

Route::delete('/livros/{id}', [LivrosController:: class, 'excluir']);

