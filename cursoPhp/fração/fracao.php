<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <style>
        div, a{
            display: block;
            text-align: center;
            background-color: blue;
            color: white;  
        }
    </style>
</head>
<body>
    <header>
        <h1><b>Analizador de Numero Real</b></h1>
    </header>
    <main>
        <?php 
        $numb = $_GET["NumeroReal"];

        $inteiro = intval($numb);

        $fracao = $numb - floor($numb);

        echo"Analisando o numero <b> $numb </b> informado pelo usuario <br> <br>";

        echo"<ul> <li> Aparte inteira do numero é <b>$inteiro</b> </ul> </li>";

        echo"<ul> <li> Aparte fracionada do numero é <b>$fracao</b> </ul> </li> <br>"
        ?>
        <div>
        <a href="javascript:history.go(-1)">Voltar</a>
        </div>
       
    </main>
</body>
</html>