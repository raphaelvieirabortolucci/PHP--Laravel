<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunosController extends Controller
{
    public function mostrar()
    {
        $alunos = Aluno::all();

        return view('alunos', [
            'alunos' => $alunos
        ]);
    }

    public function cadastrar(Request $request)
    {
        Aluno::create([
            'nome' => $request->nome,
            'curso' => $request->curso
        ]);

        return redirect('/alunos');
    }
    public function editar($id)
    {
        $aluno = Aluno::find($id);

        return view('editar', [
            'aluno' => $aluno
        ]);
    }
}