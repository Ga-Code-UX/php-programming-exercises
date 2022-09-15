<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>exercicio_vetores_associativos</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>

    <?php
        // 1 forma de escrver
         $meses["Janeiro"] = 31;
         $meses["F"] = 28;
         $meses["M"] = 31;
         $meses["Ab"] = 30;
         $meses["M"] = 31;
         $meses["J"] = 30;
         $meses["Julho"] = 31;
         $meses["A"] = 31;
         $meses["S"] = 30;
         $meses["O"] = 31;
         $meses["N"] = 30;
         $meses["D"] = 31;


        
         echo (" O mês de Janeiro tem ". $meses["Janeiro"]. " dias ");
         echo (" <br> O mês de Fevereiro tem ". $meses["F"]. " dias ");
         echo (" <br> O mês de Março tem ". $meses["M"]. " dias ");
         echo (" <br> O mês de Abril tem ". $meses["Ab"]. " dias ");
         echo (" <br> O mês de Maio tem ". $meses["M"]. " dias ");
         echo (" <br> O mês de Junho tem ". $meses["J"]. " dias ");
         echo (" <br> O mês de Julho tem ". $meses["Julho"]. " dias ");
         echo (" <br> O mês de Agosto tem ". $meses["A"]. " dias ");
         echo (" <br> O mês de Setembro tem ". $meses["S"]. " dias ");
         echo (" <br> O mês de Outubro tem ". $meses["O"]. " dias ");
         echo (" <br> O mês de Novembro tem ". $meses["N"]. " dias ");
         echo (" <br> O mês de Dezembro tem ". $meses["D"]. " dias ");
        echo ("<br><br>");

         //2 forma de screver...prefiro essa.
         $meses2 = Array(31,28 ,31,30, 31,30,31, 31,30,31,30,31);

         echo (" <br> O mês de Janeiro tem ". $meses2[0]. " dias ");
         echo (" <br> O mês de Fevereiro tem ". $meses2[1]. " dias ");
         echo (" <br> O mês de Março tem ". $meses2[2]. " dias ");
         echo (" <br> O mês de Abril tem ". $meses2[3]. " dias ");
         echo (" <br> O mês de Maio tem ". $meses2[4]. " dias ");
         echo (" <br> O mês de Junho tem ". $meses2[5]. " dias ");
         echo (" <br> O mês de Julho tem ". $meses2[6]. " dias ");
         echo (" <br> O mês de Agosto tem ". $meses2[7]. " dias ");
         echo (" <br> O mês de Setembro tem ". $meses2[8]. " dias ");
         echo (" <br> O mês de Outubro tem ". $meses2[9]. " dias ");
         echo (" <br> O mês de Novembro tem ". $meses2[10]. " dias ");
         echo (" <br> O mês de Dezembro tem ". $meses2[11]. " dias ");
    ?>

</body>
</html>