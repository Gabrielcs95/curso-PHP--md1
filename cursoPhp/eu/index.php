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
        <h1>consulta de cpf</h1>
        <?php 
        $cpf = $_GET["cpf"];
        $url = 'https://cpf-api.p.rapidapi.com/api/v2/rapidapi/cpf/%7Bcpf%7D'.$_GET["cpf"];
        $dados = json_decode(file_get_contents($url), true);
        ?>
    </header>
    <section>
        <form action="" method="get">
            <label for="cpf">Consulte seu cpf</label>
            <input type="number" name="cpf" id=" cpf">

            <input type="submit" value="Verificar CPF">
        </form>
    </section>
    <section>
        <h1>Resultado da Consulta</h1>
        <?php 
        echo"$url"
        ?>
    </section>
</body>
</html>