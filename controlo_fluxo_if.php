<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>controlo_fluxo_if</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
    <form method="post">
        Insira a sua nota: <input type="number" step="0.01" name="nota">
        <input type="submit" value="Verificar Nota">
    </form>
    <?php
        //$nota = 12;
        //$nota = 8;
        /*$nota = $_POST["nota"];
            if($nota > 9){
                echo ("Passou");
            }
            else{
                echo ("Reprovou");
            }*/
            //
            
            if (isset($_POST["nota"])){
                $nota = $_POST["nota"];
                if($nota > 18){
                    echo ("Muito Bom");
                }
                else if ($nota >15){
                    echo ("Bom");
                }
                else if ($nota >=10){
                    echo ("Suficiente");
                }
                else{
                    echo("Insuficiente");
                }
            }
    ?>

</body>
</html>