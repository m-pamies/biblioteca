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
    <link rel="icon" href="iicon.png">
    <link rel="stylesheet" href="estilos.css">
    <title>Novo Autor</title>
</head>
<body>
<?php include "menu.php"; ?>
    </table>
    <div align="center">
        <h4> Inserir autor de livro</h4>
        <form method="post" action="guardar_autor_livro.php">
            <br>Código do Livro:
            <input type="text" name="txt_id_livro" placeholder="Digite id do livro" required><br>
            <br>* Este id foi atribuido quando inseiru o livro.<br>
            <br>Se não se recorda pode consultar <a href="lista_livros.php">aqui</a>.<br>
            <br>Nome do Autor:
            <select name="txt_id_autor" required>
                <?php 
                   
                    $tabela=mysqli_query($acesso->ligacao,"select id_autor, nome, apelido from autores");
                    while ($registo=mysqli_fetch_array($tabela)){
                        echo "<option value=".$registo['id_autor']. ">".$registo['nome']." ".$registo['apelido']."</option>"; 
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