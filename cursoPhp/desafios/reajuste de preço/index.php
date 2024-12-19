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
        <h1>Reajuste de preço</h1>
        <?php 
        $preco = $_GET["valor"] ?? 0;
        $reajuste = $_REQUEST["percentual"] ?? 0;
        ?>
    </header>
    <section>
        <form action="" method="get">
            <label for="Preco">Preço do Produto (R$):</label>
            <input type="number" name="valor" id="idvalor" value="<?=$preco?>">

            <label for="percentual">Qual será o percentual do reajuste ?(<b><span id="p">?</span>%</b>)</label>

            <input type="range" name="percentual" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">

            <input type="submit" value="Reajustar">
        </form>
    </section>
    <section>
        <h1>Resultado do Reajuste</h1>

        <?php 
        $preco_final = $preco + ($preco * $reajuste / 100);

        echo "O produto que custava R$ $preco, com <b> $reajuste % de aumento </b> vai passar a custar R$ $preco_final a partir de agora";
        ?>
    </section>
        <script>
            function mudaValor(){
                p.innerText = reaj.value;
            }
        </script>

</body>
</html>