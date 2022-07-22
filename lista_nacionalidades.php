<?php
include "bd_classe.php";
$acesso=new acesso();
$acesso->ligar();
$tabela=mysqli_query($acesso->ligacao,"select * from nacionalidades");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de editoras</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php include 'menu.php';?>
    <h4>Listagem de nacionalidades</h4>
    <hr>
    <table id="listatab">
        <tr> 
            <th>Código da Nacionalidade</th>            
            <th>Nacionalidade</th>            
        </tr>

        <?php
           while ($registo=mysqli_fetch_array($tabela))
           {
               ?>
               <tr>
                   <td><?php echo $registo['id_nacionalidade'];?></td> 
                   <td><?php echo $registo['nacionalidade'];?></td></tr> 
        <?php  
           }     
        ?>

    </table>   
    <br><br><a href="index1.php">Voltar à página Inicial</a></h2> 
</body>
</html>