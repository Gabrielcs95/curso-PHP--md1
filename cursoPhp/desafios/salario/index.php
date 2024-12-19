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
        <h1>Informe seu salario</h1>
    </header>
    <main>
        <?php 
        $valor = $_GET["salario"] ?? 0;
        ?>
    </main>
    <section>
        <form action="" method="get">
            <label for="salario">Salario:</label>
            <input type="number" name="salario" id="id.salario" value="<?=$valor?>">
            <p>considerando o salário minimo de <b>R$ 1.412,00</b></p>
            <input type="submit" value="calcular">
        </form>
    </section>
    <section id="resultado">
        <h1><b>Resultado final</b></h1>
        <?php 
        $salario = 1412;
        $quantSalario = (int)($valor / $salario);
        $resto = $valor % $salario;


        echo "Quem recebe salário de <b>$valor </b> ganha <b> $quantSalario salario minimo </b> + R$ $resto ";

        ?>

    </section>
</body>
</html>