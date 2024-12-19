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
        <h1>Anatomia de uma Divisão</h1>
    </header>
    <main>
        <?php 
        $valorDiv = $_GET["dividendo"] ?? 0;
        $valorDivisor = $_GET["divisor"] ?? 0 ;
        ?>
    </main>
    <section>
    <form action="" method="get">
        <label for="dividendo">Dividendo:</label>
        <input type="number" name="dividendo" id="dividendo" value="<?=$valorDiv?>">
        <label for="divisor">Divisor:</label>
        <input type="number" name="divisor" id="divisor" value="<?=$valorDivisor?>">
        <input type="submit" value="Analisar">
    </form>

    </section>
   
    <section id="resultado">
        <h1><b>Estrutura da divisão</b></h1>
        <?php 
        if($valorDiv != 0){
            $divisao = $valorDiv / $valorDivisor;
             $resto = $valorDiv % $valorDivisor;
        } else{
            echo"erro: divisão por 0 nao é permitido";
        }
        echo" 0 valor do dividendo é  <b>$valorDiv </b> <br>";

        echo"o valor do divisor é <b> $valorDivisor </b> <br>";

        echo"o resultado é: <b>$divisao</b> <br>";

        echo"o resto da divisao é: <b> $resto </b>";

       
        ?>
    </section>
</body>
</html>