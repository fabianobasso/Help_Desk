<?php
    require_once 'app/validadorAcesso.php';
    require_once 'app/utils.php';
    
    $usuarios = recuperarUsuarios('app/user.hd');
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

        <script src="assets/js/app.js"></script>  
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a href="" class="navbar-brand">
                <i class="fas fa-headset fa-2x d-inline-block align-top text-info"></i>
                <span class="ml-2">Help Desk</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="app/logoff.php"><i class="fas fa-sign-out-alt fa-2x"></i></a>
                </li>
            </ul>
        </nav>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="mt-5 row mb-1">
                    <h1 class="display-4">Lista de Usuário do Sistema</h1>
                </div>
                <table class="mt-2 table table-striped">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Perfil</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?= $usuario['id'] ?></td>
                            <td><?= $usuario['email'] ?></td>
                            <td><?= $usuario['senha'] ?></td>
                            <td><?= $usuario['perfil'] == '1' ? 'Administrador' : 'Usuário' ?></td>
                            <td><?= ucfirst($usuario['status']) ?></td>
                            <td><a href="" data-toggle="tooltip" data-placement="right" title="Desativar Usuário"><i class="fas fa-user-slash"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>    
            <div class="row mt-5 align-left">
                <div class="col-6">
                    <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>