<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>variaveis</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
    <?php
        $nomePessoa = "Ana"; // é uma string
        $NomePessoa = "Manel"; // é uma string
        $anoBatismo = "1985";  // é uma string
        $idade = 28;  // é um integer;
        $notaExame = 15.5; // é um double;
        $notaExame = 12;
        $contaAtiva = true;
        echo "Nome: $nomePessoa";
        echo "<br>";
        echo " A $nomePessoa é casada com $NomePessoa";
        echo "<br>";
        echo " A $nomePessoa foi batizada em ". $anoBatismo;
        echo "<br>";
        $IDADE = 46;
        echo " idade : $idade";
        echo "<br>";
        echo "Nota: $notaExame";
        echo "<br>";
        echo " Conta ativa : $contaAtiva";
    ?>
</body>
</html>