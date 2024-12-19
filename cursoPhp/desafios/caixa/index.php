<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <style>
       img.notas{
        height: 20px;
        
       }
    </style>
</head>
<body>
    <header>
        <h1>Caixa eletronico</h1>

        <?php 
        $saque = $_REQUEST["valor"] ?? 0;
        $resto = $saque;

        $saq100 = floor($resto /100);
        $resto %= 100;

        $saq50 = floor($resto /50);
        $resto %= 50;

        $saq20 = floor($resto /20);
        $resto %= 20;

        $saq10 = floor($resto /10);
        $resto %= 10;

        $saq5 = floor($resto /5);
        $resto %= 5;

        $saq2 = floor($resto /2);
        $resto %= 2;

        $saq1 = floor($resto /1);
        $resto %= 1;


        ?>
    </header>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?> " method="get">
            <label for="quant">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="valor" id="id.valor" value="<?=$saque?>">
            <input type="submit" value="Sacar">
        </form>
    </section>
    <section>
        <h1>Saque de R$<?=$saque?>  realizado</h1>
        <p>O caixa eletronico vai te entrega as seguintes notas:</p>
        <ul>
            <li><img src="./imagens/100-reais.jpg" alt="" class="notas"> x<?=$saq100?> </li> <br>
            <li><img src="./imagens/50-reais.jpg" alt="" class="notas">x<?=$saq50?></li> <br>
            <li><img src="./imagens/20-reais.jpg" alt="" class="notas">x<?=$saq20?></li><br>
            <li><img src="./imagens/10-reais.jpg" alt="" class="notas">x<?=$saq10?></li><br>
            <li><img src="./imagens/5-reais.jpg" alt="" class="notas">x<?=$saq5?></li> <br>
            <li><img src="./imagens/2-reais.jpg" alt="" class="notas">x<?=$saq2?></li><br>
            <li><img src="./imagens/1-real.jpg" alt="" class="notas">x<?=$saq1?></li>
        </ul>
    </section>
</body>
</html>