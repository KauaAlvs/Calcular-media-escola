<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href= "http://localhost/3SISC/calculo_media_escola/CSS/estilo.css">
        <title>Calculo Média</title>
    </head>
    <body>
</html>

<?php

    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    $nota5 = $_POST['nota5'];


    $resultado = $nota1 + $nota2 + $nota3 + $nota4 + $nota5;
    $media = $resultado / 5;

    echo "<span class='media' style='color: red;'> Sua média é $media e você está:</span>"; 

        if ($media < 6) {
            echo "<span class='reprovado'>Reprovado</span><br>";
            echo "<span class='destaque' style='color: red;'>Você precisa se esforçar mais!</span>";

        } elseif ($media >= 6 && $media <= 6.9) {
            echo "<span class='regular'>Aprovado com Regular</span><br>";
            echo "<span class='destaque'>Bom trabalho, mas você pode melhorar!</span>";

        } elseif ($media >= 7 && $media <= 8) {
            echo "<span class='aprovado'>Aprovado</span><br>";
            echo "<span class='destaque' style='color: purple;'>Você foi bom, parabéns!</span>";

        } elseif ($media >= 9 && $media <= 10) {
            echo "<span class='muito-bom'>Aprovado com Muito Bom</span><br>";
            echo "<span class='destaque' style='color: pink;'>Você arrasou, parabéns!</span>";
                   
        } else{
            echo "$nome digite uma nota válida.";
        }
?>

        <form method="post" action="index.php">
                    <label>Deseja calcular a média de outro aluno? </label>
                    <input type="submit" name="continuar" value="Sim">
        </form>
        <br>
        <form method="post" action="http://localhost/3SISC/calculo_media_escola/final.html">
                    <label>Deseja encerrar o programa? </label>
                    <input type="submit" name="encerrar" value="Encerrar">
        </form>
</body>
</html>
           

         