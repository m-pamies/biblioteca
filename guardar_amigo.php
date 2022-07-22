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
    <title>Novo Amigo</title>
</head>
<body>
    <?php include 'menu.php';?>
    <div align="center">
        <h4> Guardar Amigo</h4>

        <!-- script em php para guardar dados-->

        <?php

            if(!(mysqli_query($acesso->ligacao,"insert into amigos (nome, contacto, email, obs) values ('$_POST[txt_nome]','$_POST[txt_contacto]','$_POST[txt_email]','$_POST[txt_obs]')"))){
                echo "Erro ao efectuar registo\n";
            }
            
            
            else{
            
                echo "Registo realizado com sucesso.";
            }
            
         
        ?>
    <br><br><h2><a href="novo_amigo.php">Inserir novo amigo</a>
    <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
    </div>
</body>
</html>