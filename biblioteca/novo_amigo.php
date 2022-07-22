<?php require 'verificarlogin.php';?>
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
<?php include "menu.php"; ?>
    </table>
    <div align="center">
        <h4> Novo Amigo</h4>
        <form method="post" action="guardar_amigo.php">
            Nome: 
            <input type="text" name="txt_nome" placeholder="Digite nome do amigo" required><br>
            <br>
            Telefone:
            <input type="text" name="txt_contacto" placeholder="Digite telefone do amigo"><br>
            <br>
            E-mail:
            <input type="text" name="txt_email" placeholder="Digite email do amigo">
            <br><br>
            Observações:
            <input type="text" name="txt_obs" placeholder="Digite obs. Max 100 carateres">
            <br><br>
            <input class="button" type="submit" value="Guardar">
            <input class="button" type="reset" value="Cancelar">
        </form>
        <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
    </div>
</body>
</html>