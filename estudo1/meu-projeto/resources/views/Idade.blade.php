<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Idade</title>
</head>
<body>

    @if ($idade >= 18)
        <p>Você é maior de idade.</p>
    @else
        <p>Você é menor de idade.</p>
    @endif

</body>
</html>