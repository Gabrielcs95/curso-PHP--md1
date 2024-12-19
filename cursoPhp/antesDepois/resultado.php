<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>
    <main>
        <?php 
        $numero = $_GET["number"];
        $menor = $numero -1;
        $mais = $numero +1;

        echo"O numero escolhido foi $numero <br>";

        echo"O seu antecessor é $menor <br>";

        echo"O seu sucessor é $mais <br> <br>";
        ?>
        <p><a href="javascript:history.go(-1)"> voltar</a></p>
    </main>
</body>
</html>