<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/calculo_media_escola/CSS/estilo.css">
    <title>Calculo média</title>
</head>
<body>
    <form method="POST" action="/Calculo_media_escola/PHP/programa.php">
        
        <label for="nome">Nome do Aluno:</label>
        <input type="text" name="nome" id="nome">

        <label for="nota1">Nota da Prova 1:</label>
        <input type="number" name="nota1" id="nota1" required>

        <label for="nota2">Nota da Prova 2:</label>
        <input type="number" name="nota2" id="nota2" required>

        <label for="nota3">Nota da Prova 3:</label>
        <input type="number" name="nota3" id="nota3" required>

        <label for="nota4">Nota da Prova 4:</label>
        <input type="number" name="nota4" id="nota4" required>

        <label for="nota5">Nota da Prova 5:</label>
        <input type="number" name="nota5" id="nota5" required>

        <input type="submit" value="Calcular Média">

</form>
</body>
</html>