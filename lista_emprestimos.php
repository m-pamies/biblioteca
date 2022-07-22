<?php
include "bd_classe.php";
$acesso=new acesso();
$acesso->ligar();
$tabela=mysqli_query($acesso->ligacao,
    "select e.id_emprestimo,  l.titulo, a.nome, e.data_emprestimo, e.data_dev, e.obs
    from emprestimos e, amigos a, livros l
    where e.id_livro= l.id_livro and
        e.id_amigo = a.id_amigo");
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
    <h4>Listagem de Empréstimos</h4>
    <hr>
    <table id="listatab">
        <tr> 
            <th>Código de Empréstimo</th>            
            <th>Livro</th>
            <th>Amigo</th> 
            <th>Data de Empréstimo</th>
            <th>Data de Devolução</th>
            <th>Observações</th>
                            
        </tr>

        <?php
           while ($registo=mysqli_fetch_array($tabela))
           {
               ?>
               <tr>
                   <td><?php echo $registo['id_emprestimo'];?></td>
                   <td><?php echo $registo['titulo'];?></td>  
                   <td><?php echo $registo['nome'];?></td> 
                   <td><?php echo $registo['data_emprestimo'];?></td> 
                   <td><?php echo $registo['data_dev'];?></td> 
                   <td><?php echo $registo['obs'];?></td>   
                   </tr> 
        <?php  
           }     
        ?>

    </table>  
    <br><br><a href="index1.php">Voltar à página Inicial</a></h2>  
</body>
</html>