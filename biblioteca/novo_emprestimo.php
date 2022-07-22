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
    <title>Novo Empréstimo</title>
</head>
<body>
    <?php include "menu.php"; ?>
    </table>
    <div align="center">
        <h4> Novo Empréstimo</h4>
        <form method="post" action="guardar_emprestimo.php">
            <br>Livro:
            
            <select name="txt_id_livro" required>
                <?php 
                   
                    $tabela=mysqli_query($acesso->ligacao,"select id_livro, titulo from livros");
                    while ($registo=mysqli_fetch_array($tabela)){
                        echo "<option value=".$registo['id_livro']. ">".$registo['titulo']."</option>"; 
                    } 

                ?>
            </select><br>

            <br>A quem vais emprestar?
            <select name="txt_id_amigo" required>
                <?php 
                   
                    $tabela=mysqli_query($acesso->ligacao,"select * from amigos");
                    while ($registo=mysqli_fetch_array($tabela)){
                        echo "<option value=".$registo['id_amigo']. ">".$registo['nome']."</option>"; 
                    } 

                ?>
            </select><br>
            <br>Data de Empréstimo:
            <input type="date" name="data_emp" placeholder="Digite data empréstimo" required><br>
            <br>
            
            
            <input class="button" type="submit" value="Guardar">
            <input class="button" type="reset" value="Cancelar">
        </form>
        <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
    </div>
</body>
</html>