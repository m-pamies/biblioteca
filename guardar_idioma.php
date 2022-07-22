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
    <title>Novo Idioma</title>
</head>
<body>
   
    <?php include 'menu.php';?>
    <div align="center">
        <h4> Guardar Idioma</h4>

        <!-- script em php para guardar dados-->

        <?php

            
            if(!(mysqli_query($acesso->ligacao, "insert into idiomas (idioma) values ('$_POST[txt_idioma]')"))){
                echo "Erro ao registar idioma\n";
            }
            
            
            else{
            
                echo "Registo realizado com sucesso.";
            }
            

        ?>
     <br><br><h2><a href="novo_idioma.php">Inserir novo idioma</a>
    <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
    </div>
</body>
</html>