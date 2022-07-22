<?php
// ligar à BD        
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
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="estilos.css">
    <title>Novo Livro</title>
</head>
<body>
 
    <?php include 'menu.php';?>
    <div align="center">
        <h4> Guardar Livro</h4>

        <!-- script em php para guardar dados-->

        <?php
              
               $col=$_POST['txt_col'];
                if (empty($col)){
                    $col='NULL';
                }
               
                $vol=$_POST['txt_vol'];
                if (empty($vol)){
                    $vol='NULL';
                }
           
           
            if (!(mysqli_query($acesso->ligacao, "insert into livros (isbn, titulo, id_editora, n_edicao, data, data_1_edicao, id_colecao, volume, id_idioma, id_genero, id_localizacao) values ('$_POST[isbn]','$_POST[txt_titulo]','$_POST[txt_id_ed]','$_POST[txt_n_ed]','$_POST[data_ed]','$_POST[data_1_ed]',$col,$vol,'$_POST[txt_idioma]','$_POST[txt_genero]','$_POST[txt_loc]')"))){
                        echo "Erro ao efectuar registo";
                    }
                    else{
                        echo "Registo realizado com sucesso.";
                    }         
                    $tabela=mysqli_query($acesso->ligacao,"select id_livro from livros where titulo ='$_POST[txt_titulo]'");
                    while ($registo=mysqli_fetch_array($tabela))
                    {
                        ?>
                        <tr>
                            <td><br>O código do livro é <?php echo $registo['id_livro'];?>.
                            <br> Guarde esse número para a inserção dos autores</td> </tr>
                            
                 <?php  
                    }     
                 ?>

    <br><br><h2><a href="novo_autor_livro.php">Inserir Autores</a> 
    <br><br><h2><a href="novo_livro.php">Inserir novo livro</a>
    <br><br><a href="index1.php">Voltar à página Inicial</a></h2>
    </div>
</body>
</html>