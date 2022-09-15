<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>controlo_fluxo_ifs_encadeados</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
  <h1>Compra de bilhete para espetaculo de dança</h1> 
  
  <form method="post">
        Tipo de bilhete:
        <select name="tipo">
            <option value="plateia">Plateia</option>
            <option value="camarote">Camarote</option>
        </select>
        <br>

        Sócio do clube de dança:
        <select name="socio">
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
        <br>
        <input type="submit" value="Calcular custo">
  </form> 
  <?php
        if(isset($_POST["tipo"])){
            $tipo = $_POST["tipo"];
            $socio = $_POST["socio"];
            $descontoPorcentagem = 0;

            if($tipo == "plateia"){
                $preco = 20;

                if($socio == "sim"){
                    $descontoPorcentagem = 10;
                }
            }
            else if($tipo=="camarote"){
                $preco = 40;

                if($socio == "sim"){
                    $descontoPorcentagem = 20;
                }
            }

            $desconto = $preco * ($descontoPorcentagem /100);
            $precoFinal= $preco - $desconto;
            echo (" O valor final do bilhete é $precoFinal € ");
        }
  ?>

</body>
</html>