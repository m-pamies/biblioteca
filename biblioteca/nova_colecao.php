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
  

    <title>Nova Coleção</title>
</head>
<body>
<?php

?>
    <?php include "menu.php"; ?>
    
    <div align="center">
    
        <h4> Nova Coleção</h4>

        <form method="post" action="guardar_colecao.php">
            <br>Nome da coleção: 
            <input type="text" name="txt_nome" placeholder="Digite nome da coleção" required><br>
            <br>Editora:
            <select name="txt_id_editora" required>
                <?php 
                   
                    $tabela=mysqli_query($acesso->ligacao,"select * from editoras where id_editora != 2");
                    while ($registo=mysqli_fetch_array($tabela)){
                        echo "<option value=" . $registo['id_editora']. ">".$registo['editora']."</option>"; 
                    } 

                ?>
            </select><br>
            <br>Nº de Volumes:
            <input type="number" name="txt_volumes" placeholder="Digite nº de volumes">
            <br><br>
            <input class="button" type="submit" value="Guardar">
            <input class="button" type="reset" value="Cancelar">
        </form>
        <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
    </div>
</body>
</html>