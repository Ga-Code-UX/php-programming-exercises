<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>variaveis2</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
    
   <?php
    echo "<strong>Declaração de variáveis</strong>";
    $produto = "Livro";
    $nomeProduto = " A Alma";
    $preco = 22.00;
    $custoEnvio = 5.00;
    $total = $preco + $custoEnvio;
    echo "<br> O $produto chama-se $nomeProduto e custou $total.<br><br>";
    echo "<br>";
    echo "<strong> Visualização de tipos </strong>";
    echo "<br><br>";
    $a = 1; // $a é uma integer
    echo " A variável a tem o valor $a e tipo ".gettype($a). "<br>";
    $a = 1.2; // Agora é um double;
    echo " a variável a tem o valor $a e tipo ".gettype($a). "<br>";
    $a = "A";
    echo " a variável a tem o valor $a e tipo ".gettype($a). "<br>";
    echo "<br><br>";
    echo $a;
    
   ?>


</body>
</html>