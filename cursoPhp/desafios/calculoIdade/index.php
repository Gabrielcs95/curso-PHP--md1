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
        <h1>Calculando a sua idade</h1>

        <?php 
        $nascimento = $_GET["nascimento"] ?? 0;

        $anoAtual = $_GET["anoAtual"] ?? 0;
        ?>
    </header>
    <section>
        <form action="" method="get">
            <label for="nasceu">Em que ano você nasceu:</label>
            <input type="number" name="nascimento" id="id.nascimento" value="<?=$nascimento?>">

            <label for="ano">Quer saber sua idade em que ano ? (atualmente estamos em <b><?=date("Y")?></b>)</label>
            <input type="number" name="anoAtual" id="id.anoAtual" value="<?=$anoAtual?>">

            <input type="submit" value="Qual sera minha idade ?">
        </form>
    </section>
    <section>
        <h1>Resultado</h1>
        <?php 
        $idade = $anoAtual - $nascimento;

        echo"Quem nasceu em $nascimento vai ter <b> $idade anos <b/>, em $anoAtual";
        ?>
    </section>
</body>
</html>