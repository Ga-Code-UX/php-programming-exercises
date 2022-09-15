<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>ciclos</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
    <?php
    $contador = 0;
    do {
        echo (" Valor atual $contador <br> ");
        $contador++;
    }
    while($contador <= 10);

    for($contador = 1; $contador <= 10; $contador++){
        echo(" Texto para contador co o valor $contador <br>");
    }
    ?>
</body>
</html>