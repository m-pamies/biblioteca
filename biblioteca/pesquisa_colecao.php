<?php
include "bd_classe.php";
$acesso=new acesso();
$acesso->ligar();
$tabela=mysqli_query($acesso->ligacao,
    "SELECT id_livro, titulo, nome, volume, editora, idioma
    FROM livros l, colecoes c, editoras e, idiomas i
    WHERE	l.id_editora=e.id_editora AND
            l.id_colecao=c.id_colecao AND
            l.id_idioma=i.id_idioma AND
            L.id_colecao LIKE $_POST[txt_id_colecao]");


?>
<!DOCTYPE html>
<html lang="en">
<head>
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
<h4>Listagem de livros da Coleção </h4>

    <hr>
    <table id="listatab" >
        <tr> 
            <th>Código livro</th>            
            <th>Titulo</th>                      
            <th>Coleção</th>
            <th>Volume</th> 
            <th>editora</th>  
            <th>Idioma</th>  
                          
        </tr>

        <?php
           while ($registo=mysqli_fetch_array($tabela))
           {
               ?>
               <tr>
                   <td><?php echo $registo['id_livro'];?></td> 
                   <td><?php echo $registo['titulo'];?></td>                  
                   <td><?php echo $registo['nome'];?></td>
                   <td><?php echo $registo['volume'];?></td>
                   <td><?php echo $registo['editora'];?></td>
                   <td><?php echo $registo['idioma'];?></td>
                   </tr> 
        <?php  
           }     
        ?>

    </table>    
    
</body>
</html>