<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Aluno</title>
</head>
<body>

    <h1>Editar Aluno</h1>

    <form action="/alunos/{{ $aluno->id }}" method="POST">

        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $aluno->nome }}">

        <br><br>

        <label>Curso:</label>
        <input type="text" name="curso" value="{{ $aluno->curso }}">

        <br><br>

        <button type="submit">Salvar alterações</button>

    </form>

</body>
</html>