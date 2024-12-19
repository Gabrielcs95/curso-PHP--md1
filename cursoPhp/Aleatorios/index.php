<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            box-sizing: border-box; 
            text-align: center; 
            color: white;
        }
        body{
            background-color: #15142b;
    background-image: linear-gradient(180deg, #372991, #15142b);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    background-attachment: fixed;

    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
        }
        section, button{
            color: black;
        }
    </style>
</head>
<body>
    <header>
        <h1>Trabalhando com numeros aleatorios</h1>
    </header>
    <section>
        <form action="" method="post">
        <p>Gerando numeros aleatorios entre 0 a 100..</p>
        <?php 
        $aleatorio = rand(0, 100);
        echo"O valor gerado foi $aleatorio <br>";
        ?>
        <button type="submit"> Gerar </button>
    </form>

    </section>
</body>
</html>