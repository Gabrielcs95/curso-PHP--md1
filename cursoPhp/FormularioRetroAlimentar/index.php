<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor1 = $_GET  ['v1'] ?? 0; //esta opção ?? 0 no formulario o valor ja começa com 0
    $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>"> <!--esta opção passando valor fixa o valor na caixa do formulario-->
            <input type="submit" value="soma">
        </form>
    </main>
    <section id="resultado">
        <h1>Resultado da soma</h1>
        <?php 
        $soma = $valor1 + $valor2;

        echo"A soma do $valor1 + $valor2 é <b> $soma</b>"
        ?>
    </section>
    
</body>
</html>