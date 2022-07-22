<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="book.png">
    <link rel="stylesheet" href="estilos.css">
    <title>Login</title>
</head>
<body>
    <!--
    <table style="width:100%; background-color: #800000">
        <tr>
            <td style="width:50%; font-size:45px; color: white; font-family: 'Courier New', monospace;">Os Nossos Livros</td>
            <td style="width:50%; text-align:right; font-size:18px; color: white; font-family: 'Courier New', monospace;">Marília &  João</td>
        </tr>
    </table>-->
    <?php include 'menu.php';?>
    <div align="center">
        <form method="POST" action="validarlogin.php">
            <br><br>
            <h3>Utilizador:</h3>
            <input type="text" name="user"><br><br>
            <h3>Password:</h3>
            <input type="password" name="password"><br><br><br>
            <input class="button" type="submit" value="Login">
            <input class="button" type="reset" value="Cancelar">
        </form>
    </div>
</body>
</html>