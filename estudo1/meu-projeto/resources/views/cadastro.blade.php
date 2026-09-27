<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
</head>
<body>

    <h1>Cadastrar Aluno</h1>

    <form action="/alunos" method="POST">

        @csrf

        <label>Nome:</label>
        <input type="text" name="nome">

        <br><br>

        <label>Curso:</label>
        <input type="text" name="curso">

        <br><br>

        <button type="submit">Cadastrar</button>

    </form>

</body>
</html>