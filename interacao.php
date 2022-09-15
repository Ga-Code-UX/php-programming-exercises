<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Interacao</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
    <form method="post">
    E-mail: <input type="text" name="email"><br>
    Nome: <input type="text" name="nome"><br>
    Morada: <input type="text" name="morada"><br>
    Código Postal: <input type="text" name="cod_postal"><br>
    Localidade:
            <select name="localidade" >
                <option value="lisboa">Lisboa</option>
                <option value="Porto">Porto</option>
                <option value="Braga">Braga</option>
                <option value="Coimbra">Coimbra</option>
            </select><br>
    <input type="submit" name="submit" value="enviar"><br>
    </form>
    <br>
    <br>
    <br>
    <?php
        //echo ("O endereço de E-mail é: ".$_GET["email"]);
        //echo (" <br> O nome é: " .$_GET["nome"]. "," .$_GET["cod_postal"]. ",".$_GET["localidade"]. "<br>");
        echo (" <br> O nome é: " .$_POST["nome"]. "," .$_POST["cod_postal"]. ",".$_POST["localidade"]. "<br>");
    ?>
</body>
</html>