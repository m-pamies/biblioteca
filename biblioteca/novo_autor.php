<?php
// ligar à BD        
    include "bd_classe.php";
    $acesso=new acesso();
    $acesso->ligar();
    require 'verificarlogin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="estilos.css">
    <title>Novo Autor</title>
</head>
<body>
<?php include "menu.php"; ?>
    </table>
    <div align="center">
        <h4> Novo Autor</h4>
        <form method="post" action="guardar_autor.php">
            <br>Nome:
            <input type="text" name="txt_nome" placeholder="digite nome" required><br>
            <br>Apelido:
            <input type="text" name="txt_apelido" placeholder="digite apelido" required><br>
            <br>Nacionalidade:
            <select name="txt_id_nac" required>
                <?php 
                   
                    $tabela=mysqli_query($acesso->ligacao,"select * from nacionalidades");
                    while ($registo=mysqli_fetch_array($tabela)){
                        echo "<option value=".$registo['id_nacionalidade']. ">".$registo['nacionalidade']."</option>"; 
                    } 

                ?><br><br>
            </select><br><br>
            <input class="button" type="submit" value="Guardar">
            <input class="button" type="reset" value="Cancelar">
        </form>
        <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
    </div>
</body>
</html>