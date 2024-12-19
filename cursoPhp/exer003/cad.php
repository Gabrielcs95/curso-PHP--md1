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
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
        $nome = $_GET["name"];
        $sobrenome = $_GET["sobrenome"];
        echo "olá, prazer em conhecer você " .$nome ." " .$sobrenome;
        ?>

    <p><a href="javascript:history.go(-1)">voltar a pagina inicial</a></p>
    </main>
</body>
</html>