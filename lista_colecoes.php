<?php
include "bd_classe.php";
$acesso=new acesso();
$acesso->ligar();
$tabela=mysqli_query($acesso->ligacao,
    "select c.id_colecao,  c.nome, e.editora, c.n_volumes 
    from colecoes c, editoras e 
    where c.id_editora = e.id_editora and
        id_colecao !=1");
require 'verificarlogin.php';
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
    <h4>Listagem de Coleções</h4>
    <hr>
    <table id="listatab">
        <tr> 
            <th>Código da Coleção</th>            
            <th>Nome</th>
            <th>Editora</th> 
            <th>Nº de volumes</th>
                            
        </tr>

        <?php
           while ($registo=mysqli_fetch_array($tabela))
           {
               ?>
               <tr>
                   <td><?php echo $registo['id_colecao'];?></td>
                   <td><?php echo $registo['nome'];?></td>  
                   <td><?php echo $registo['editora'];?></td> 
                   <td><?php echo $registo['n_volumes'];?></td>   
                   </tr> 
        <?php  
           }     
        ?>

    </table> 
    <br><br><a href="index1.php">Voltar à página Inicial</a></h2>   
</body>
</html>