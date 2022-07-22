<?php
include "bd_classe.php";
$acesso=new acesso();
$acesso->ligar();
$tabela=mysqli_query($acesso->ligacao,
    "SELECT id_livro, titulo, nome, volume, editora, idioma, genero
    FROM livros l, colecoes c, editoras e, idiomas i, genero g
    WHERE	l.id_editora=e.id_editora AND
            l.id_colecao=c.id_colecao AND
            l.id_idioma=i.id_idioma AND
            l.id_genero=g.id_genero AND
            g.id_genero LIKE´$_POST[txt_id_genero]");


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
<h4>Listagem de livros do autor  </h4>

    <hr>
    <table id="listatab" style="width: 900px;">
        <tr> 
            <th>Código livro</th>            
            <th>Titulo</th>                      
            <th>Coleção</th>
            <th>Volume</th> 
            <th>Editora</th>  
            <th>Idioma</th>  
            <th>Género</th>                 
        </tr>

        <?php
           while ($registo=mysqli_fetch_array($tabela))
           {
               ?>
               <tr>
                   <td><?php echo $registo['Id_livro'];?></td> 
                   <td><?php echo $registo['titulo'];?></td>                   
                   <td><?php echo $registo['nome'];?></td>
                   <td><?php echo $registo['volume'];?></td>
                   <td><?php echo $registo['editora'];?></td>
                   <td><?php echo $registo['idioma'];?></td>
                   <td><?php echo $registo['genero'];?></td></tr> 
        <?php  
           }     
        ?>

    </table>    
    
</body>
</html>