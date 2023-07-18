
<?php
    // header('Location: ?page=login');
    // // die;

    session_start();

    // $_SESSION['nome'] = 'teste';
    $adm = $_SESSION['adm'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

  
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <!-- <a class="nav-link active" aria-current="page" href="?page=home">Home</a> -->
                </li>
                <?php
                    if($adm == 1) {
                        ?>
                            <li class="nav-item">
                            <a class="nav-link" href="?page=novo">Novo Usuário</a>
                            </li>
                        <?php
                    }
                ?>
                <li class="nav-item">
                <a class="nav-link" href="?page=listar">Listar Usuários</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>

    <style>
        body{
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
    }
    </style>


    <div class="container">
        <div class="row">
            <div class="col mt-5">

             <?php

                include("config.php");
                switch(@$_REQUEST["page"]) {   
                   
                case "novo":
                    include("novo-usuario.php");   
                break;
                case "listar":
                    include("listar-usuario.php");
                break;
                case "salvar";
                    include("salvar-usuario.php");
                break;
                case "editar";
                    include("editar-usuario.php");
                break;
                default:
                header("Location: login.php");   
                }
            ?>

            </div>
        </div> 
    </div>


    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>