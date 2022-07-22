<?php require 'verificarlogin.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="estilos.css">
    <title>Nova localização</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <div align="center">
        <h4> Nova Localização</h4>
        <form method="post" action="guardar_localizacao.php">
            Indique o móvel:
            <input type="text" name="txt_movel" placeholder="Digite nome movel" required><br>
            ex: corredor 1
            <br>
            <br>Indique a prateleira:
            <input type="text" name="txt_prat" placeholder="Digite nº prateleira" required><br>
            De cima para baixo, 1, 2, 3, etc<br>
            <br>
           
            <input class="button" type="submit" value="Guardar">
            <input class="button" type="reset" value="Cancelar">
        </form>
        <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
    </div>
</body>
</html>