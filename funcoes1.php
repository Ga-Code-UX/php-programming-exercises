<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        Nota do 1º teste: <input type="number" name="nota1"> <br>
        Nota do 2º teste: <input type="number" name="nota2"> <br>
        <input type="submit" value="Resultado">
    </form>
    <?php

       

        if (isset($_GET["nota1"])){
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];

            function classificacao ($nota1, $nota2){
                
                if ($nota1 > 18 & $nota2 > 18){
                    echo "Muito Bom";
                }
                else if ($nota1 > 15 & $nota2 > 15){
                    echo "Bom";
                }
                else if ($nota1 >= 10 & $nota2 >= 10){
                    echo "Suficiente";
                }
                else {
                    echo "Insuficiente";
                }
            
            }  
            classificacao($nota1,$nota2); 
        }
    ?>
</body>
</html>