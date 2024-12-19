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
        <h1>Calculadora de Tempo</h1>
        <?php 
        $segundos = $_REQUEST["seg"] ?? 0;
       
        ?>
    </header>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="id.segundos" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <?php 
     $sobra = $segundos;

     $semanas = (int)($sobra / 604_800) ;
     $sobra = $sobra % 604_800;

     $dias = (int)($sobra / 86_400);
     $sobra = $sobra % 86_400;

     $horas = (int)($sobra / 3_600) ;
     $sobra = $sobra % 3_600;

     $minutos = (int)($sobra / 60);
     $sobra = $sobra % 60;
     
     $segundos = $sobra;
    
    ?>
    <section>
        <h1>Totalizando tudo</h1>
        <?php 
        
        echo"analisando o valor que você digitou, <b> $segundos segundos<b/>, equivalem a um total de:";
        ?>
         <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
       
    </section>
</body>
</html>