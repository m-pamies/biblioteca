<?php require 'verificarlogin.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="estilos.css">
    <title>Novo Genero</title>
</head>
<body>
    <?php include "menu.php"; ?>
    </table>
    <div align="center">
        <h4> Novo Genero</h4>
        <form method="post" action="guardar_genero.php">
            Indique Genero:
            <input type="text" name="txt_genero" placeholder="Digite novo genero" required>
            <br><br>
            <input class="button" type="submit" value="Guardar">
            <input class="button" type="reset" value="Cancelar">
        </form>
        <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
    </div>
</body>
</html> 