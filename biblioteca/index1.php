<?php
// ligar à BD        
    include "bd_classe.php";
    $acesso=new acesso();
    $acesso->ligar();
    $tabela=mysqli_query($acesso->ligacao,
    "SELECT COUNT(Id_livro) AS total FROM `livros`");


?>
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
<?php include 'menu.php';?>
        <h4> Bem-vindo à nossa Biblioteca </h4>    
        <div align="center">
        <img src="imagens/pessoa.jpg" width="700" height="450">
        <?php
           while ($registo=mysqli_fetch_array($tabela))
           {
               ?>
               <h3> Aqui encontrarás &nbsp
                   <?php echo $registo['total'];?>
                   &nbsp livros.<br>
                   Disfruta! Se mereceres até te emprestamos algum!</h3>
                   <?php
           }
        ?>

        

</body>
</html>