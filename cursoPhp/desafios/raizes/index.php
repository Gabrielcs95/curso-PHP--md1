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
        <h1>Informe um numero</h1>
    </header>
    <?php 
    $numero = $_GET["valor"] ?? 0;
    ?>
    <section>
        <form action="" method="get">
            <label for="numero">numero:</label>
            <input type="number" name="valor" id="id.valor" value="<?=$numero?>">
            <input type="submit" value="calcular raizes">
        </form>
    </section>
    <section id="resultado">
        <h1> Resultado Final</h1>
        <?php 
        $raizQuadrada = sqrt($numero);
        $raizCubica = pow($numero, 1/3);

        $inteiraQuadrada = floor($raizQuadrada);
        $inteiraCubica = floor($raizCubica);

        echo"Analizando o <b> numero $numero<b/>";
        
        echo"<ul><li> A raiz quadrada é: <b>$inteiraQuadrada<b/> </li></ul>";

        echo"<ul><li> A raiz Cúbica é: <b>$inteiraCubica<b/> </li></ul>"
              
        ?>
    
    </section>
</body>
</html>