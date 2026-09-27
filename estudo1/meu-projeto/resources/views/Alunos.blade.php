<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Alunos</title>
</head>
<body>

    <h1>Lista de alunos</h1>

    @foreach ($alunos as $aluno)

        <p>Nome: {{ $aluno->nome }}</p>
        <p>Curso: {{ $aluno->curso }}</p>

        <a href="/alunos/{{ $aluno->id }}/editar">
        Editar
        </a>

        <form action="/alunos/{{ $aluno->id }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">Excluir</button>

        </form>

        <hr>

    @endforeach

</body>
</html>