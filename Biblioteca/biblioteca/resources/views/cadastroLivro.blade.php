<head>
    <meta charset="UTF-8">
    <title>Cadastrar livro</title>
</head>
<body>

    <h1>Cadastrar livro</h1>

    <form action="/livros" method="POST">

        @csrf

        <label>Titulo:</label>
        <input type="text" name="titulo">

        <br><br>

        <label>Autor:</label>
        <input type="text" name="autor">

        <br><br>

        <label>Ano:</label>
        <input type="number" name="ano">

        <br><br>

        <button type="submit">Cadastrar</button>

    </form>

</body>
</html>