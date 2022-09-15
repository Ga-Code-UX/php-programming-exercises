<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>vetores</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
    <?php
    $paises[] = "Portugal";
    $paises[] = "Espanha";
    $paises[] = "França";
    $paises[] = "Itália";
    $paises[] = "Alemanha";

    echo (" A primeira posição do vetor temo valor " .$paises[0]. "<br>");
    echo (" A segunda posição do vetor temo valor " .$paises[1]);

    echo ("<br>");
    print_r($paises);

    $paises[4] = "Brazil";
    echo ("<br> A ultima posição do vetor tem o valor " . $paises[4]. "<br>");
    echo ("<br>");
    $quantidade_de_paises = count($paises);
    echo ("<br> O vetor tem $quantidade_de_paises paises. ");
    ?>
  

</body>
</html>