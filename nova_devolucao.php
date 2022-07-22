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
    <title>Novo Empréstimo</title>
</head>
<body>
    <?php include "menu.php"; ?>
    </table>
    <div align="center">
        <h4> Inserir Devolução</h4>
        <form method="post" action="guardar_devolucao.php">
            <br>Escolhe o Amigo e Livro emprestado:
            
            <select name="txt_id_emprestimo" required>
                <?php 
                   
                    $tabela=mysqli_query($acesso->ligacao,
                        "select e.id_emprestimo, e.id_amigo , a.nome, l.titulo
                        from emprestimos e, amigos a, livros l
                        WHERE e.id_amigo=a.id_amigo and  
                            e.id_livro=l.id_livro  and                        
                            e.data_dev IS NULL");
                    while ($registo=mysqli_fetch_array($tabela)){
                        echo "<option value=".$registo['id_emprestimo']. ">".$registo['nome']." - ".$registo['titulo']."</option>"; 
                    } 

                ?>
            </select><br>

            <br>Data de Devolução:
            <input type="date" name="data_dev" placeholder="Digite data devolução" required><br>
            <br>
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