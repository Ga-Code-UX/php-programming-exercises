<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>controlo_fluxo_switch</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
    <body>
        <form method="post">
        Escolha o número do mês
        <input type="number" name="mes"><br>
        <input type="submit" name="Mostrar nome">
        </form>

        <?php
            if(isset($_POST["mes"])){
                $mes = $_POST["mes"];

                switch($mes) {
                    case "1": $nomeMes = "Janeiro"; break;
                    case "2": $nomeMes = "Fevereiro"; break;
                    case "3": $nomeMes = "Março"; break;
                    case "4": $nomeMes = "Abril"; break;
                    case "5": $nomeMes = "Maio"; break;
                    case "6": $nomeMes = "Junho"; break;
                    case "7": $nomeMes = "Julho"; break;
                    case "8": $nomeMes = "Agosto"; break;
                    case "9": $nomeMes = "Setembro"; break;
                    case "10": $nomeMes = "Outubro"; break;
                    case "11": $nomeMes = "Novembro"; break;
                    case "12": $nomeMes = "Dezembro"; break;
                }
                echo (" Escolheu o mês $nomeMes ");
            }
        ?>

    </body>
</html>