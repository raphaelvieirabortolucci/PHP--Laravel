<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function mostrar() {
        $nome = 'Raphael';
        $curso = 'Técnico em Informática para Internet';

        return view('aluno', [
            'nome' => $nome, 
            'curso' => $curso
        ]);
    }
}
