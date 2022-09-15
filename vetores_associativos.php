<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>vetores_associativos</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
    <body>
      <?php
    $precos["TV"] = 350;
    $precos["teclado"] = 30;
    $precos["Rato"] = 13;
    $precos["Colunas"] = 80;
    echo ("<br>");

    $quantidade_precos = count($precos);
    echo ("<br>");
    echo ("O preço da TV é de ". $precos["TV"]. " € ");
    echo ("<br> A tabela de preços contempla $quantidade_precos produtos");

    $paises2 = Array("Portugal","Espanha","França","Itália","Alemanha");
    $precos2 = Array("TV" => 350, "Teclado" => 30, "Rato" => 13, "Colunas" => 80);

    echo ("<br>");

    print_r($precos2);

    echo ("<br>");

    print_r($paises2);

      ?>  


    </body>
</html>