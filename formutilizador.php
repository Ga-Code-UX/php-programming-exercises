<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>formutilizador</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
  <form method="post" action="processa_form.php">
    <table>
        <tr>
            <td>Nome de utilizador:</td>
            <td>
                <input type="text" name="username">
            </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>
                <input type="password" name="password">
            </td>
        </tr>
        <tr>
            <td>Nome:</td>
            <td>
                <input type="text" name="nome">
            </td>
        </tr>
        <tr>
            <td>Sexo:</td>
            <td>
                <input type="radio" name="sexo" value="m">M
                <input type="radio" name="sexo" value="f">F
            </td>
        </tr>
        <tr>
            <td>País:</td>
            <td>
                <select name="pais">
                    <option value="portugal">Portugal</option>
                    <option value="espanha">Espanha</option>
                    <option value="França">França</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="enviar">
            </td>
        </tr>
    </table>
  </form>  

</body>
</html>