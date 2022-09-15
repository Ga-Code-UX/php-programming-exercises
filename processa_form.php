<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>processa_form</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
    
  <?php
  echo ("Os dados foram enviados com sucesso!<br><br>");
  echo ("Nome de utilizador: <strong>".$_POST["username"]. "</strong><br><br>");
  echo ("Nome: <strong>".$_POST["nome"]. "</strong><br><br>");
  echo ("Sexo: <strong>".$_POST["sexo"]. "</strong><br><br>");
  echo ("País: <strong>".$_POST["pais"]. "</strong><br><br>");
  ?>  

</body>
</html>