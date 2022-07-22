<?php
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
    <link rel="icon" href="imagens/book.png">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ver Login</title>
</head>
<body>

   <table style="width:100%; background-color: #800000">
        <tr>
            <td style="width:50%; font-size:45px; color: white; font-family: 'Courier New', monospace;">Os Nossos Livros</td>
            <td style="width:50%; text-align:right; font-size:18px; color: white; font-family: 'Courier New', monospace;">Marília &  João</td>
        </tr>
    </table>
    <h4>Validar Login</h4>
    <hr>
    <?php
        session_start();

        if(!empty($_POST)) {
            $user = ($_POST['user']);
            $pass = ($_POST['password']);
            $login = mysqli_query($acesso->ligacao, "SELECT * FROM users WHERE user = '$user' AND pass = '$pass'");
            
            if ($login && mysqli_num_rows($login) == 1){
                $_SESSION['user'] = $user;
		        $_SESSION['pass'] = $pass;
                header('Location: index1.php');
               
                exit();
                 
              
            }
            else{
                echo "<p> Utilizador ou password inválidos!</p>";
                
            }
        }

     ?> 
    <br><a href="index.php">Tente novamente</a>
</body>
</html>