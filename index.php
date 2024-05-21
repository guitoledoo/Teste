<?php
include("DB/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="CSS/estilo-padrao.css">
    <title>Agenda</title>
    
</head>
<body>
    <header class="bg-dark" > 
        <div class="container">
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="IMG/logo_agendador.png" alt="Agenda" width="120">
            </a>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado" >
                <ul class="navbar-nav mr-auto"> 
                    <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?menuop=contatos">CONTATO</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?menuop=tarefas">TAREFAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?menuop=eventos">EVENTOS</a></li>

                    

                </ul>
            </div>

        </nav>
        </div>
    </header>

    <main>
        <div class="container">
        <hr>
        <?php
            $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]: "home";
            switch ($menuop) {
                case 'home':
                    include("PAGINAS/HOME/home.php");
                    break;
                case 'contatos':
                    include("PAGINAS/CONTATOS/contatos.php");
                break;
                case 'cad-contato':
                    include("PAGINAS/CONTATOS/cad-contato.php");
                break;
                case 'inserir-contato':
                    include("PAGINAS/CONTATOS/inserir-contato.php");
                break;
                case 'editar-contato':
                    include("PAGINAS/CONTATOS/editar-contato.php");
                break; 
                case 'excluir-contato':
                    include("PAGINAS/CONTATOS/excluir-contato.php");
                break;
                case 'atualizar-contato':
                    include("PAGINAS/CONTATOS/atualizar-contato.php");
                break;       
                case 'tarefas':
                    include("PAGINAS/TAREFAS/tarefas.php");
                break;
                case 'eventos':
                    include("PAGINAS/EVENTOS/eventos.php");
                break;
                
                default:
                    include("PAGINAS/HOME/home.php");
                    break;
            }
        ?>
        </div>
    </main>
    <footer class="container-fluid fixed-bottom bg-dark">
            <div class="text-center">PROJETO AGENDA</div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
</body>
</html>