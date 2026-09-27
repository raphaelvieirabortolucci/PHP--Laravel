<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;


class LivrosController extends Controller
{
    public function mostrar()
{
    $livros = Livro::all();

    return view('livros', [
        'livros' => $livros
    ]);
}

    public function cadastro()
        {
            return view('cadastroLivro');
        }
    
    public function cadastrar(Request $request){
        Livro::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'ano' => $request->ano
        ]);
    
        return redirect('/livros');
    }

    public function editar($id)
    {

        $livro = Livro::find($id);

        return view('editar', [
            'livro' => $livro
        ]);
    }

    public function atualizar(Request $request, $id){
        $livro = Livro::find($id);

        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->ano = $request->ano;

        $livro->save();

        return redirect('/livros');
    }

    public function excluir($id){
        $livro = Livro::find($id);

        $livro->delete();

        return redirect('/livros');
    }



}

    