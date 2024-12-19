<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nome = "gabriel";
    $sobrenome = "costa";
    const pais = "Brasil";
    $salario = 1.900;

    echo" olá, $nome $sobrenome, hoje é: " .date("d/M/Y") ."voce mora " . pais ." e seu salario é" .$salario ;

    var_dump($salario); //informa o tipo da variavel.
    $vet = [1, 3, 4, 6];
    var_dump($vet);

    echo "$nome $sobrenome" .pais; //variavel const tem que concatena
    echo"$nome \"da silva\" $sobrenome";

    echo <<< FRASE
        EU SOU $nome $sobrenome
    FRASE;
    ?>

</body>
</html>