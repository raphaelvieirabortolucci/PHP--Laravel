<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\IdadeController;
use App\Http\Controllers\AlunosController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function (){
    return 'Ola Raphael!';
});

Route::get('/aluno', [AlunoController::class, 'mostrar']);

Route::get('/idade', [IdadeController::class, 'exibir']);

Route::get('/alunos', [AlunosController::class, 'mostrar']);

Route::post('/alunos', [AlunosController::class, 'cadastrar']);

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/alunos/{id}/editar', [AlunosController::class, 'editar']);

Route::put('/alunos/{id}', [AlunosController::class, 'atualizar']);

Route::delete('/alunos/{id}', [AlunosController::class, 'excluir']);