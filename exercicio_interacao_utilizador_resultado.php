<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>exercicio_interacao_utilizador-resutultado </title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
    
    <?php
    
    if(isset($_POST["altura"])) {
        $altura= $_POST["altura"];
        $peso = $_POST["peso"];
        $IMC = $peso / ($altura * $altura);
        
        if($IMC < 16){
            echo (" O IMC da pessoa é de $IMC ");
            echo (" <br> Magreza grave");
        }
        else if ($IMC > 16  & $IMC < 16.99){
            echo (" O IMC da pessoa é de $IMC ");
            echo (" <br> Magreza moderada");
        }
        else if ($IMC > 17  & $IMC < 18.49){
            echo (" O IMC da pessoa é de $IMC ");
            echo (" <br> Magreza leve");
        }
        else if ($IMC > 18.5  & $IMC < 24.99){
            echo (" O IMC da pessoa é de $IMC ");
            echo (" <br> Saudável");
        }
        else if ($IMC > 25  & $IMC <29.99){
            echo (" O IMC da pessoa é de $IMC ");
            echo (" <br> Acima do peso");
        }
        else if ($IMC > 30  & $IMC < 34.99){
            echo (" O IMC da pessoa é de $IMC ");
            echo (" <br>  Obesidade Grau I ");
        } 
        else if ($IMC > 35 & $IMC < 34.99){
            echo (" O IMC da pessoa é de $IMC ");
            echo (" <br> Obesidade Grau II ");
        }   
       
        else{
            echo (" O IMC da pessoa é de $IMC ");
            echo (" <br> Obesidade Grau III ");
        }
    }
   ?>

</body>
</html>