<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Exercício - Controlo de fluxo Ciclos</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
    <body>
    
    <form>
        Insira um número:
         <input type="number" name="number" step="0.01"><br> 
        <input type="submit" value="Mostrar">
     </form> 
      
      <?php
            if(isset($_GET["number"])){
                $number = $_GET["number"];
               
      ?>

      os números pares nesse intervalo:
      <p>

     <?php
        for($contador = 2; $contador <= $number; $contador++){
            if($contador % 2 == 0){
                echo(" <p> $contador </p> ");
            }
            }
        echo("</p>");

    }
     ?>
 
<br> <br> <br>
<p>---------------------------------------------------</p>

<form>
Insira 5 números <br>

Primeiro número:
<input type="number" name="number1" step="0.01"><br> 
Segundo número:
<input type="number" name="number2" step="0.01"><br> 
Terceiro número:
<input type="number" name="number3" step="0.01"><br> 
Quarto número:
<input type="number" name="number4" step="0.01"><br>
Quinto número:
<input type="number" name="number5" step="0.01"><br>  

<input type="submit" value="Mostrar">
</form>

    <?php
        if(isset($_GET["number1"])){
            $number1 = $_GET["number1"];
            $number2 = $_GET["number2"];
            $number3 = $_GET["number3"];
            $number4 = $_GET["number4"];
            $number5 = $_GET["number5"];

           
    ?>

    Lista de números maiores que 10:
    <p>

    <?php
     $lista = array($number1,$number2,$number3,$number4,$number5 );
     foreach ($lista as &$valor) {   
            if ($valor > 10){
                echo("$valor <br>");
            };
        } 
         echo("</p>");

    }
    ?>
       




    </body>
</html>

