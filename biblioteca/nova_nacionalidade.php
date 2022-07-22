<?php require 'verificarlogin.php';?>
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
    <?php include "menu.php"; ?>
    </table>
    <div align="center">
        <h4> Nova Nacionalidade</h4>
        <form method="post" action="guardar_nacionalidade.php">
            Indique a nova nacionalidade:
            <input type="text" name="txt_nacionalidade" placeholder="Digite nova nacionalidade" required>
            <br><br>

            <input class="button" type="submit" value="Guardar">
            <input class="button" type="reset" value="Cancelar">
        </form>
        <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
    </div>
</body>
</html>