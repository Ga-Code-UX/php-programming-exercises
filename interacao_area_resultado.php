<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Interacao-area-resultado</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
    <body>
        <?php
            if(isset($_POST["comprimento"])){
                $comprimento = $_POST["comprimento"];
                $largura = $_POST["largura"];
    
                $area = $comprimento * $largura;
    
                echo (" A area da divisão é de $area metros quadrados ");
            }
           
        ?>

    </body>
</html>