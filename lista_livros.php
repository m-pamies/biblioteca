<?php
include "bd_classe.php";
$acesso=new acesso();
$acesso->ligar();
$tabela=mysqli_query($acesso->ligacao,"select * from localizacao");

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
    <h4>Pesquisa de Livros</h4>
    <hr>
    <div align="center">
    <h3> Pesquisa por Nome (Completo)</h3>

    <form method="post" action="pesquisa_nome.php">
            <br>Nome do Livro:
            <input type="text" name="txt_nome" placeholder="Digite nome" required>
            <input class="button2" type="submit" value="Pesquisar">
            <br>* pode ser apenas parcial
    </form>
    
    <br>
    <h3> Pesquisa por Nome (Resumido)</h3>

    <form method="post" action="pesquisa_nome_simples.php">
            <br>Nome do Livro:
            <input type="text" name="txt_nome" placeholder="Digite nome" required>
            <input class="button2" type="submit" value="Pesquisar">
            <br>* pode ser apenas parcial
    </form>
        <br>
    <hr>
    <h3> Pesquisa por Autor</h3>
    <form method="post" action="pesquisa_autor.php">
            <br>Nome do Autor:
            <select name="txt_id_autor" required>
                <?php 
                   
                    $tabela=mysqli_query($acesso->ligacao,"select id_autor, nome, apelido from autores");
                    while ($registo=mysqli_fetch_array($tabela)){
                        echo "<option value=".$registo['id_autor']. ">".$registo['nome']." ".$registo['apelido']."</option>"; 
                    } 
                ?>
            </select>
            <input class="button2" type="submit" value="Pesquisar">
    </form>
    <br>
    <hr>
    <h3> Pesquisa por Coleção</h3>
    <form method="post" action="pesquisa_colecao.php">
            <br>Nome da Coleção:
            <select name="txt_id_colecao" required>
                <?php 
                   
                    $tabela=mysqli_query($acesso->ligacao,"select id_colecao, nome from colecoes where id_colecao !=1");
                    while ($registo=mysqli_fetch_array($tabela)){
                        echo "<option value=".$registo['id_colecao']. ">".$registo['nome']."</option>"; 
                    } 
                ?>
            </select>
            <input class="button2" type="submit" value="Pesquisar">
    </form>
    <br>
    <hr>

    <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
        </div>
</body>
</html>