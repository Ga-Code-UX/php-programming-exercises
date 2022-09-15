<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>exercicio_vetores</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
    <?php
    //  1 forma de escrever
    $notas[] = 15.5;
    $notas[] = 9.5;
    $notas[] = 20;
    $notas[] = 6;
    $notas[] = 14;
    echo("<br>");
    
    $quantidade_de_notas = count($notas);
    echo ("<br> A quantidade de notas nesse array é $quantidade_de_notas ");
    
    // 2 forma de escrever
    $lista_notas = array(15.5,9.5,20,6,14);
    $quantidade = count($lista_notas);
    echo ("<br> A quantidade de notas nesse array é $quantidade ");
    ?>

</body>
</html>