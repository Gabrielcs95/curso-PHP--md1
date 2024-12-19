<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="style.css">

  <style>
    div, a{
        display: block;
        text-align: center;
        text-decoration: none;
        background-color: blue;
        color: white;
        
    }
   
  </style>
    </style>
</head>
<body>
    <header>
        <h1><b>Conversor de Moedas v1.0</b></h1>
    </header>
    <main>
        <?php 
        $reais = $_GET["valor"];

        $inicio = date("m-d-Y", strtotime("-7 days")) ;
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $valorDolar = $reais / $cotacao;

        $dolar = round($valorDolar, 2);

        echo"Seus R$ $reais, equilavem a <b>US$ $dolar </b> <br> <br>";

        echo "<b> Cotação de $cotacao </b>, informada diretamente do <b> Bando central do Brasil </b>. <br> <br> ";
        ?>
        
        <div>
        <a href="javascript:history.go(-1)">voltar</a>
        </div>
      
    </main>
</body>
</html>