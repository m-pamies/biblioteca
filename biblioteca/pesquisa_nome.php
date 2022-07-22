<?php
include "bd_classe.php";
$acesso=new acesso();
$acesso->ligar();
$tabela=mysqli_query($acesso->ligacao,
    "SELECT Id_livro,titulo, CONCAT (a.nome, ' ', a.apelido) AS autor , isbn, editora, c.nome, volume, g.genero, i.idioma, CONCAT(loc.movel, ' - Prateleira ', loc.prateleira) AS localizacao
    FROM 
    (SELECT l.Id_livro, isbn, titulo, id_editora, n_edicao, l.data, data_1_edicao, id_colecao, volume, id_idioma, id_genero, id_localizacao, a.Id_autor  FROM livros l
        LEFT JOIN autores_livro a
        ON l.Id_livro = a.Id_livro) la
    LEFT JOIN editoras e
    ON 	la.id_editora=e.id_editora 
    LEFT JOIN autores a
    ON		la.id_autor=a.id_autor 
    LEFT JOIN colecoes c
    ON        la.id_colecao=c.id_colecao 
    LEFT JOIN idiomas i
    ON        la.id_idioma=i.id_idioma
    LEFT JOIN genero g
    ON        la.id_genero=g.id_genero
   	LEFT JOIN localizacao loc   
    ON       la.id_localizacao=loc.id_localizacao
    WHERE la.titulo LIKE CONCAT ('%','$_POST[txt_nome]','%')");


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
<h4>Listagem de livros por nome</h4>
    <hr>
    <table id="listatab" style="width: 900px;">
        <tr> 
            <th>Código livro</th>            
            <th>Titulo</th>
            <th>Autor</th>
            <th>ISBN</th>            
            <th>Editora</th>
            <th>Coleção</th>
            <th>Volume</th> 
            <th>Género</th>  
            <th>Idioma</th>  
            <th>Localização</th>                 
        </tr>

        <?php
           while ($registo=mysqli_fetch_array($tabela))
           {
               ?>
               <tr>
                   <td><?php echo $registo['Id_livro'];?></td> 
                   <td><?php echo $registo['titulo'];?></td>
                   <td><?php echo $registo['autor'];?></td>
                   <td><?php echo $registo['isbn'];?></td> 
                   <td><?php echo $registo['editora'];?></td>
                   <td><?php echo $registo['nome'];?></td>
                   <td><?php echo $registo['volume'];?></td>
                   <td><?php echo $registo['genero'];?></td>
                   <td><?php echo $registo['idioma'];?></td>
                   <td><?php echo $registo['localizacao'];?></td></tr> 
        <?php  
           }     
        ?>

    </table>    
    
</body>
</html>