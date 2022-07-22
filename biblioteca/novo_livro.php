<?php
// ligar à BD        
    include "bd_classe.php";
    $acesso=new acesso();
    $acesso->ligar();
    require 'verificarlogin.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="estilos.css">
    <title>Novo livro</title>
</head>
<body>
    <?php include "menu.php"; ?>
    </table>
    <div align="center">
        <h4> Novo livro</h4>
        <form method="post" action="guardar_livro.php">
            ISBN:
            <input type="text" name="isbn" placeholder="Digite ISBN" required><br>
            <br>
            Título: 
            <input type="text" name="txt_titulo" placeholder="Digite titulo" required><br>
            <br>
            
            Editora
            <select name="txt_id_ed" required>
            <?php 
                   
                   $tabela=mysqli_query($acesso->ligacao,"select * from editoras where id_editora != 2");
                   while ($registo=mysqli_fetch_array($tabela)){
                       echo "<option value=".$registo['id_editora']. ">".$registo['editora']."</option>"; 
                   } 

               ?>
            </select>
            <br> <br>
            Edição nº:
            <input type="text" name="txt_n_ed" placeholder="Digite nº edição" required><br>
            <br>
            Data da Edição:
            <input type="date" name="data_ed" placeholder="Digite data edição" required><br>
            <br>
            Data 1ª Edição:
            <input type="date" name="data_1_ed" placeholder="Digite data 1ª edição" required>
            <br><br>
            Coleção:
            <select name="txt_col" required>
            <?php 
                   
                   $tabela=mysqli_query($acesso->ligacao,"select id_colecao, nome from colecoes");
                   while ($registo=mysqli_fetch_array($tabela)){
                       echo "<option value=".$registo['id_colecao']. ">".$registo['nome']."</option>"; 
                   } 

               ?>
            </select>
            <br>* Se não pertencer a nenhuma coleção escolha: Não aplicável.<br>
            <br>Nº do volume: 
            <input type="text" name="txt_vol" placeholder="Digite nº do volume">
            <br>* Apenas se pertencer uma coleção
            <br> 
                       
            <br>Idioma:
            <select name="txt_idioma" required>
            <?php 
                   
                   $tabela=mysqli_query($acesso->ligacao,"select * from idiomas");
                   while ($registo=mysqli_fetch_array($tabela)){
                       echo "<option value=".$registo['id_idioma']. ">".$registo['idioma']."</option>"; 
                   } 

               ?>
            </select>
            <br>
          
            <br>Genero:
            <select name="txt_genero" required>
            <?php 
                   
                   $tabela=mysqli_query($acesso->ligacao,"select * from genero");
                   while ($registo=mysqli_fetch_array($tabela)){
                       echo "<option value=".$registo['id_genero']. ">".$registo['genero']."</option>"; 
                   } 

               ?>
            </select>
           <br>
           
            <br>Localização:
            <select name="txt_loc" required>
            <?php 
                   
                   $tabela=mysqli_query($acesso->ligacao,"select * from localizacao");
                   while ($registo=mysqli_fetch_array($tabela)){
                       echo "<option value=".$registo['id_localizacao']. ">".$registo['movel']." - ".$registo['prateleira']."</option>"; 
                   } 

               ?>
            </select>
            <br><br>
            <input class="button" type="submit" value="Guardar">
            <input class="button" type="reset" value="Cancelar">
        </form>
        <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
    </div>
</body>
</html>