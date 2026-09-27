<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar livro</title>
</head>
<body>

    <h1>Editar livro</h1>

    <form action="/livros/{{ $livro->id }}" method="POST">

        @csrf
        @method('PUT')

        <label>titulo:</label>
        <input type="text" name="titulo" value="{{ $livro->titulo }}">

        <br><br>

        <label>autor:</label>
        <input type="text" name="autor" value="{{ $livro->autor }}">

        <br><br>

        <label>ano:</label>
        <input type="number" name="ano" value="{{ $livro->ano }}">

        <br><br>

        <button type="submit">Salvar alterações</button>

    </form>

</body>
</html>