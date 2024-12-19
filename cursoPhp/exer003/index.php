<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Formulário</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="name">NOME :</label>
            <input type="text" name="name" id="id.name"> <br> <br>
            <label for="sobrenome">SOBRENOME :</label>
            <input type="text" name="sobrenome" id="id.sobrenome"> <br>
            <label for="email">EMAIL :</label>
            <input type="email" name="email" id="id.email">
            <input type="submit" value="Enviar">

        </form>
    </section>
</body>
</html>