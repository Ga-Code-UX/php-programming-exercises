<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Exercício - Controlo de fluxo Ciclos</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
    <body>
       
        <?php
            // declarar e definir a função
            function quadrado ($num){
                return $num * $num; // devolve $num ao quadrado
            }

            //chamar a função quadrado();
            echo(" O quadrado de 6 é ". quadrado(6));

            function escreverTitulo($titulo){
               
                if($titulo ==""){
                    return;
                }
                echo(" <h1>$titulo</h1>");
            }
            $a = "";
           // escreverTitulo(" Olá, esta é uma função sem return! ");
           escreverTitulo($a);
           $b = " Agora a função vai mostrar algo! ";
           escreverTitulo($b);

           function linhas($quantidade =1){
            // Mostrar <br> $quantidade vezes
            for($i= 0; $i < $quantidade; $i++){
                echo("<br>");
            }
            }
            echo(" Linha1 ");
            linhas();// mostra <br> uma vez
            echo(" Linhas2 ");
            linhas(3);// mostra <br> três vezes
            echo(" Linhas3 ");

           function mostraDobro($num){
            $num = $num * 2;
            echo $num;
           }
           $valor1 = 5;
           echo("<h2> Por valor: $valor1 </h2>"); // mostra 5
           mostraDobro($valor1);//mostra 10
           echo("<h2> Por valor continua: $valor1 </h2>"); //Mostra 5

           function aumento(&$salario, $percentagem){
                // aumenta o $salario com $percentagem
                $salario = $salario *(1 + $percentagem / 100);
           }
           $sal = 50000;
           echo("<h2> (Por referência) Pré-aumento de salário: $sal </h2>"); // mostra 50000
           aumento($sal,4);
           echo("<h2> (Por referência é alterada) Pós-aumento de salário: $sal </h2>");// mostra 52000

           $posicao= "fora";

           function mudaPosicao (){
            global $posicao;
            $posicao = "dentro";
          
           }
           mudaPosicao();
           echo("<h2> variável global: $posicao </h2>"); // mostra "dentro"
        ?>

    </body>
</html>