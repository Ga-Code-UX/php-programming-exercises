<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>sintaxe2</title>
        <meta name="viewport" content="width-device, inicial-scale=1">
    </head>
<body>
    <?php
    
    $nome = "Marco Bellini";
    /* echo "<table width=\"100%\" border=\"2\">";
    echo "<tr>";
    echo "<td width=\"50%\">";
    echo "First Name:";
    echo "</td>";
    echo "<td width=\"50%\">";
    echo "$nome";
    echo "</td>";
    echo "<tr>";
    echo "</table>";*/

    ?>
    
   <!-- changind the code-->

   <table width= "100%" border="2">
    <tr>
    <td width="50%">
        First Name:
    </td>
    <td width="50%">
        <?php
        echo $nome;
        ?>
    </td>
    </tr>
   </table>



</body>
</html>