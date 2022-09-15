<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>ciclos</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
    <body>
     <form>
        Valor Inicial: <input type="number" name="inicial" step="0.01"><br> 
        Valor Final: <input type="number" name="final" step="0.01"><br> 
        <input type="submit" value="Mostrar">
     </form> 
      <?php
            if(isset($_GET["inicial"])){
                $inicial = $_GET["inicial"];
                $final = $_GET["final"];
           
      ?>

      Lista de número:
      <ul>

     <?php
        for($contador = $inicial; $contador <= $final; $contador++){
            echo(" <li> $contador </li> ");
        }
        echo("</ul>");

    }
     ?>


      
    </body>
</html>