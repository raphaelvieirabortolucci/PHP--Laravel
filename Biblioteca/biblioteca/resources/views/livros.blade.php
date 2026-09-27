<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>livros</title>
</head>
<body>

    <h1>Lista de alunos</h1>

    @foreach ($livros as $livro)

        <p>Titulo: {{ $livro->titulo }}</p>
        <p>Autor: {{ $livro->autor }}</p>
        <p>Ano: {{ $livro->ano }}</p>

        <a href="/livros/{{ $livro->id }}/editar">
        Editar
        </a>

        <form action="/livros/{{ $livro->id }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">Excluir</button>

        </form>

        <hr>

    @endforeach

</body>
</html>