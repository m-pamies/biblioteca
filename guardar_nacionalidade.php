<?php
// ligar à BD        
    include "bd_classe.php";
    $acesso=new acesso();
    $acesso->ligar();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="estilos.css">
    <title>Nova Nacionalidade</title>
</head>
<body>
    <?php include 'menu.php';?>
    <div align="center">
        <h4> Guardar Nacionalidade</h4>

        <!-- script em php para guardar dados-->

        <?php

            if (!(mysqli_query($acesso->ligacao,  "insert into nacionalidades (nacionalidade) values ('$_POST[txt_nacionalidade]')"))){
                echo "Erro ao efectuar registo";
            }
            else{
                echo "registo realizado com sucesso.";
            
            }
            
        ?>
    <br><br><h2><a href="nova_nacionalidade.php">Inserir nova nacionalidade</a>
    <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
    </div>
</body>
</html>