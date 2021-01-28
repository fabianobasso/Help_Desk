<?php
    require_once 'app/validadorAcesso.php';
    require_once 'app/utils.php';
   
   $chamados = recuperaChamados();
   $listaDeChamadoPorUsuario = listarChamados($chamados);
   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <a href="" class="navbar-brand">
            <i class="fas fa-headset fa-2x d-inline-block align-top text-info"></i>
            <span class="ml-2">Help Desk</span>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="app/logoff.php">Sair</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">

            <div class="card-consultar-chamado">

                <div class="card">
                    <div class="card-header">
                        Consulta de Chamado
                    </div>

                    <div class="card-body">
                        
                        <?php  foreach ($listaDeChamadoPorUsuario as $chamadoRegistrado): ?>
                                <div class="card mb-3 bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $chamadoRegistrado[1] ?></h5>
                                        <h6 class="card-subtitle mb-2 text-muted"><?= $chamadoRegistrado[2] ?></h6>
                                        <p class="card-text"><?= $chamadoRegistrado[3] ?></p>

                                    </div>
                                </div>
                        <?php endforeach;?>
                        <div class="row mt-5">
                            <div class="col-6">
                                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>