<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>ciclos</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
    <body>
     <form method="post">
        Insira o número da tabuada que quer ver:
        <input type="number" name="numero" step="0.01"> <br>
        <input type="submit" value="Mostrar">
     </form>   
    <?php
        if (isset($_POST["numero"])){
            $numero = $_POST["numero"];

            for($contador = 1; $contador < 10; $contador++){
                $resultado = $numero * $contador;
                echo (" $numero x $contador = $resultado <br> ");
            }
        }
    ?>
    </body>
</html>