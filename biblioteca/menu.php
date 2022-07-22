<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style> 
        body{
            margin: 0px;
            
        }
        .opcoesmenu{
            background-color: #b30000;
            color: white;
            padding: 15px;
            font-size: 15px;
            border: none;
            cursor: pointer;
        }
        .subopcoes{
            position: relative;
            display: inline-block;
        }
        .subopcoes-conteudo{
            display: none;
            position: absolute;
            background-color: #ffb3b3;
            min-width: 170px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .subopcoes-conteudo a{
            color: black;
            padding: 12px;
            text-decoration: none;
            display: block;
        }
        .subopcoes-conteudo a:hover{
            background-color: #f1f1f1;
        }
        .subopcoes:hover .subopcoes-conteudo{
            display: block;
        }
        .subopcoes:hover .opcoesmenu{
            background-color: #ffb3b3;
            color: black;
        }


    </style>
</head>
<body>
    
    <table style="width:100%; background-color: #800000">
        <tr>
            <td style="width:50%; font-size:45px; color: white; font-family: 'Courier New', monospace;">Os Nossos Livros</td>
            <td style="width:50%; text-align:right; font-size:18px; color: white; font-family: 'Courier New', monospace;">Marília &  João</td>
        </tr>
    </table>
    <div style="width:100%;background-color: #b30000;">

        <div class="subopcoes">
            <button class="opcoesmenu">Livros</button>
            <div class="subopcoes-conteudo">
                <a href="novo_livro.php">Inserir</a>
                <a href="novo_autor_livro.php">Inserir autores de um livro</a>
                <a href="lista_livros.php">Pesquisar Livros</a>
            </div>
        </div>

        <div class="subopcoes">
            <button class="opcoesmenu">Coleções</button>
            <div class="subopcoes-conteudo">
                <a href="nova_colecao.php">Inserir</a>
                <a href="lista_colecoes.php">Listagem</a>
            </div>
        </div>

        <div class="subopcoes">
            <button class="opcoesmenu">Autores</button>
            <div class="subopcoes-conteudo">
                <a href="novo_autor.php">Inserir</a>
                <a href="lista_autores.php">Listagem</a>
                <a href="novo_autor_livro.php">Inserir autores de um livro</a>
            </div>
        </div>

        <div class="subopcoes">
            <button class="opcoesmenu">Gênero</button>
            <div class="subopcoes-conteudo">
                <a href="novo_genero.php">Inserir</a>
                <a href="lista_generos.php">Listagem</a>
            </div>
        </div>

        <div class="subopcoes">
            <button class="opcoesmenu">Idiomas</button>
            <div class="subopcoes-conteudo">
                <a href="novo_idioma.php">Inserir</a>
                <a href="lista_idiomas.php">Listagem</a>
            </div>
        </div>

        <div class="subopcoes">
            <button class="opcoesmenu">Nacionalidades</button>
            <div class="subopcoes-conteudo">
                <a href="nova_nacionalidade.php">Inserir</a>
                <a href="lista_nacionalidades.php">Listagem</a>
            </div>
        </div>
        <div class="subopcoes">
            <button class="opcoesmenu">Editoras</button>
            <div class="subopcoes-conteudo">
                <a href="nova_editora.php">Inserir</a>
                <a href="lista_editoras.php">Listagem</a>
            </div>
        </div>

        <div class="subopcoes">
            <button class="opcoesmenu">Gestão</button>
            <div class="subopcoes-conteudo">
                <a href="novo_amigo.php">Inserir Amigo</a>
                <a href="lista_amigos.php">Listagem Amigos</a>
                <a href="novo_emprestimo.php">Inserir Empréstimo</a>
                <a href="lista_emprestimos.php">Listagem empréstimos</a>
                <a href="nova_devolucao.php">Inserir Devolução</a>
                <a href="nova_localizacao.php">Inserir localização</a>
                <a href="lista_localizacoes.php">Listagem localizações</a>
                
            </div>
        </div>
        <div class="subopcoes">
            <button class="opcoesmenu">Logout</button>
            <div class="subopcoes-conteudo">
                <a href="logout.php">Sair</a>
                
            </div>
        </div>

    </div>
</body>
</html>