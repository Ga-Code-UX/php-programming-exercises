<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title> exercício - funções</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
    <body>
        <?php
            function minutos ($dias){
                $x = $dias * 1440;
                echo $x;
            }
            echo minutos(2); // mostra 2880 minutos
            echo("<br>");
            echo minutos (38); // mostra 54720 minutos;
        ?>



    </body>
</html>