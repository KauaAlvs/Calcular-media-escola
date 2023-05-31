<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost/calculo_media_escola/CSS/estilo.css">
    <title>Cálculo de Média</title>
</head>
<body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['recalcular'])) { 
        }
        if (isset($_POST['encerrar'])) {    
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];
        $nota5 = $_POST['nota5'];

        $notas = $nota1 + $nota2 + $nota3 + $nota4 + $nota5;
        $media = $notas / 5;

        if ($media <= 10)
        echo "<span class='nome'>Olá $nome, segue suas notas:</span><br>";

        switch ($media) {
            case ($media < 6):
                $cor = "blue";
                $mensagemCor = "red";
                $mensagem = "Você precisa se esforçar mais!";
                echo "<span class='media'>$media <br></span>";
                echo "<span class='reprovado'>Reprovado</span><br>";
                echo "<span class='destaque' style='color: red;' >Você precisa se esforçar mais!</span>";
                break;

            case ($media >= 6 && $media <= 6.9):
                $cor = "yellow";
                $mensagemCor = "black";
                $mensagem = "Bom trabalho, mas você pode melhorar!";
                echo "<span class='media' style='color: black;' >$media <br></span>";
                echo "<span class='regular'>Aprovado com Regular</span><br>";
                echo "<span class='destaque' style='color: gray;' >Bom trabalho, mas você pode melhorar!</span>";
                break;

            case ($media >= 7 && $media <= 8):
                $cor = "green";
                $mensagemCor = "purple";
                $mensagem = "Você foi bom, parabéns!";
                echo "<span class='media'>$media <br></span>";
                echo "<span class='aprovado'>Aprovado</span><br>";
                echo "<span class='destaque' style='color: purple;'>Você foi bom, parabéns!</span>";
                break;

            case ($media >= 9 && $media <= 10):
                $cor = "gold";
                $mensagemCor = "pink";
                $mensagem = "Você arrasou, parabéns!";
                echo "<span class='media'>$media <br></span>";
                echo "<span class='muito-bom'>Aprovado com Muito Bom</span><br>";
                echo "<span class='destaque' style='color: pink;'>Você arrasou, parabéns!</span>";
                break;

            case ($media >10):
                $mensagemCor = "red";
                $mensagem = "Digite notas válidas";
                echo "Olá $nome, $mensagem por gentileza.";
                break;

        }
    }
?>

<form method="post" action="index.php">
       <label>Deseja calcular a média de outro aluno? </label>
       <input type="submit" name="continuar" value="Sim">
</form>
<br>
<form method="post" action="http://localhost/calculo_media_escola/final.html">
       <label><br>Deseja encerrar? </label>
       <input type="submit" name="encerrar" value="Encerrar">
</form>
 
</body>
</html>

            

               