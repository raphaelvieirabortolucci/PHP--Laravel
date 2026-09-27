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

        <hr>

    @endforeach

</body>
</html>