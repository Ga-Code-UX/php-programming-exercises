<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>exercicio_variaveis</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
   <?php
   //valores de entrada
   $nome = 'TV Samsung 40" 4k';
   $precoSemIva= 430;
   $percentagemDesconto = 15; //15%
   $percentagemIva = 23; //23%
   $portes = 10; // 10€

   //cálculos
   $desconto = $precoSemIva * $percentagemDesconto / 100;
   $precoComDesconto = $precoSemIva - $desconto;
   $precoComDescontoPortes = $precoComDesconto + $portes;
   $Iva = $precoComDescontoPortes * $percentagemIva / 100;
   $precoComIva = $precoComDescontoPortes + $Iva;
   echo ("O produto $nome tem o preço final de $precoComIva € incluindo IVA, desconto e portes")
   ?> 

</body>
</html>