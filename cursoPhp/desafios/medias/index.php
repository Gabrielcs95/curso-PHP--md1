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
        <h1>Medias Aritméticas</h1>
    </header>
    <?php 
        $valor1 = $_GET["valor1"] ?? 0;
        $peso1 = $_GET["peso1"] ?? 0;

        $valor2 = $_GET["valor2"] ?? 0;
        $peso2 = $_GET["peso2"] ?? 0;
    ?>
    <section>
        <form action="" method="get">
            <label for="valor1">1º valor:</label>
            <input type="number" name="valor1" id="id.nota1" value="<?=$valor1?>">

            <label for="peso1">1º peso:</label>
            <input type="number" name="peso1" id="id.peso1" value="<?=$peso1?>">
            <!--  ------------------------------------  -->
            <label for="valor2">2º valor:</label>
            <input type="number" name="valor2" id="id.nota2" value="<?=$valor2?>">

            <label for="peso2">2º peso</label>
            <input type="number" name="peso2" id="id.peso2" value="<?=$peso2?>">

            <input type="submit" value="Calcular Medidas">
        </form>
    </section>
    <section>
        <h1>Calculo das Medidas</h1>
        <?php 
            $mediaSimples = (($valor1 + $valor2) / 2);

            $mediaPonderada = number_format(($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2),2);

            echo"Analisando o valor $valor1 e $valor2.";

            echo"<ul><li>A <b> Media aritmética Simples</b> entre os valores é igual a $mediaSimples </ul> </li>";

            echo"<ul><li> A <b> Média Aritmetica Ponderada</b> com os pesos $peso1 e $peso2 é igual a $mediaPonderada </ul> </li>";


        ?>
    </section>
</body>
</html>